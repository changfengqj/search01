<?php
namespace Drupal\importcontent\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Drupal\file\Entity\File;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Link;
use Drupal\Core\Url;
use Symfony\Component\HttpFoundation\Response;
use Drupal\user\Entity\User;
use Drupal\Core\File\FileSystem;



/**
 * Implements the SimpleForm form controller.
 *
 * This example demonstrates a simple form with a singe text input element. We
 * extend FormBase which is the simplest form base class used in Drupal.
 *
 * @see \Drupal\Core\Form\FormBase
 */
class importcontentForm extends FormBase {

  /**
   * Build the simple form.
   *
   * A build form method constructs an array that defines how markup and
   * other form elements are included in an HTML form.
   *
   * @param array $form
   *   Default form array structure.
   * @param \Drupal\Core\Form\FormStateInterface $form_state
   *   Object containing current form state.
   *
   * @return array
   *   The render array defining the elements of the form.
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    global $base_url;
    $params = \Drupal::request()->query->all();
    $account = \Drupal::currentUser();
    $uid = $account->id();
/* 
    $form['lan'] = [
      '#type' => 'select',
      '#title' => $this->t('Select language'),
      '#options' => array('zh-hans'=>'中文','en'=>'English'),
      '#required' => true,
    ];
*/
    $form['file'] = [
      '#type' => 'managed_file',
      '#title' => $this->t('Upload File'),
      '#upload_location' => 'public://tmp',
      '#upload_validators' => array(
        'file_validate_extensions' => array('csv','xls','xlsx'),
        'file_validate_size' => array(10*1024*1024),
      ),
      '#description' => '<div class="description"><a href="/modules/custom/importcontent/template/Travel_and_Transportation.csv" download>'.t('Example file').'</a></div>',
      '#required' => true,
    ];

    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('提交'),
      '#attributes' => array(
        'class'=> array('confirm'),
      ),
    ];
    
    return $form;
  }

  public function getFormId() {
    return 'importcontent_form';
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    //上传的文件
    //$lan = $form_state->getValue('lan');
    $lan = 'en';
    $file = $form_state->getValue('file');
    
    $operations = array();
    if(isset($file[0]) && $file[0] > 0){
      $fid = $file[0];
      $file_object = file::load($fid);
      $file_name = $file_object->getFilename();
      $uri = $file_object->getFileUri();
      $realpath = \Drupal::service('file_system')->realpath($uri);
      $path = str_replace($_SERVER['DOCUMENT_ROOT'] . '/', '', $realpath);
      
      $file = fopen($path, 'r');
      $data = [];
      $n = 0;
      while (($rowData = fgetcsv($file)) !== false) {

        if($n > 0){
          $title = $rowData[0];
          $price = $rowData[1];
          $detail_url = $rowData[2];
          $subject = $rowData[3];
          $condition = $rowData[4];
          $medium = $rowData[5];
          $size = $rowData[6];
          $no = $rowData[7];
          $description = $rowData[8];
          $artists_engravers = $rowData[9];
          $main_pic = $rowData[10];
          $image_1 = $rowData[11];
          $image_2 = $rowData[12];
          $image_3 = $rowData[13];
          $image_4 = $rowData[14];
          $image_5 = $rowData[15];
          $term = $rowData[16];
          \Drupal::logger('importcontent')->info('title in while and if'.$title);
          \Drupal::logger('importcontent')->info('lan in while and if'.$lan);
          $operations[] = array(
            '\Drupal\importcontent\Controller\batchController::importcontent',
            array($title,$price,$detail_url,$subject,$condition,$medium,$size,$no,$description,$artists_engravers,$main_pic,$image_1,$image_2,$image_3,$image_4,$image_5,$term,$lan),
          );
        }
        
        $n++;
      }
      //asdf();
      //fclose($file);
      $batch = array(
        'title' => '导入内容',
        'operations' => $operations,
        'finished' => '\Drupal\importcontent\Controller\batchController::importcontentFinishedCallback',
      );
      batch_set($batch); 
    }
  }
}