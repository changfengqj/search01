<?php
namespace Drupal\importcontent\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Drupal\node\Entity\Node;
use Drupal\user\Entity\User;
use Drupal\Core\Url;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class batchController {
  public static function importcontent($title,$price,$detail_url,$subject,$condition,$medium,$size,$no,$description,$artists_engravers,$main_pic,$image_1,$image_2,$image_3,$image_4,$image_5,$term,$lan, &$context){
    global $base_url;
    $langcode = \Drupal::languageManager()->getCurrentLanguage()->getId(); 
    $account = \Drupal::currentUser();
    $uid = $account->id();
    $con = \Drupal::database();
    $results = array();
    $message = '执行中: '.$title;

    //英文
    if($lan == 'en'){
      //判断是否有这个id,
      $nid = $con->select("node__field_no",'no')
      ->fields("no",array('entity_id'))
      ->condition("field_no_value",$no,'=')
      //->condition('langcode',$langcode,'=')
      ->execute()
      ->fetchfield();
      if($nid > 0){
        $node = Node::load($nid);
      }
      else{
        $node = Node::create(['type' => 'page']);
        $node->status = 1;
        $node->title = $title;
        $node->created = time();
        $node->set('uid', $uid);
        $node->enforceIsNew();  
      }
      

      if($price != ''){
        $field_price = [
          'value' => $price,
        ];
        $node->set('field_price', $field_price);
      }
      if($detail_url != ''){
        $field_detail_url = [
          'value' => $detail_url,
        ];
        $node->set('field_detail_url', $field_detail_url);
      }
      if($subject != ''){
        $field_subject = [
          'value' => $subject,
        ];
        $node->set('field_subject', $field_subject);
      }

      if($condition != ''){
        $field_condition = [
          'value' => $condition,
        ];
        $node->set('field_condition', $field_condition);
      }

      if($medium != ''){
        $field_medium = [
          'value' => $medium,
        ];
        $node->set('field_medium', $field_medium);
      }

      if($size != ''){
        $field_size = [
          'value' => $size,
        ];
        $node->set('field_size', $field_size);
      }

      if($no != ''){
        $field_no = [
          'value' => $no,
        ];
        $node->set('field_no', $field_no);
      }

      if($description != ''){
        $field_description = [
          'value' => $description,
        ];
        $node->set('body', $field_description);
      }

      if($artists_engravers != ''){
        $field_artists_engravers = [
          'value' => $artists_engravers,
        ];
        $node->set('field_artists_engravers', $field_artists_engravers);
      }

      $tid = 0;
      if($term != ''){
        $tid = $con->select("taxonomy_term_field_data",'ttd')
        ->fields('ttd',array('tid'))
        ->condition('name',$term,'=')
        ->condition('langcode',$lan,'=')
        ->execute()
        ->fetchfield();
        if($tid > 0){
          $field_fenlei = [
            'target_id' => $tid,
          ];
          $node->set('field_fenlei', $field_fenlei);  
        }
      }
      
//main image
      if($main_pic != ''){
        $images = array();
        $images = self::get_images($main_pic,$images);
        $node->set('field_main_pic', $images);  
      }
//other images
      
      if($image_1 != '' || $image_2 != ''||$image_3 != '' || $image_4 != ''|| $image_5 != ''){
        $images = array();
        $images = self::get_images($image_1,$images);
        $images = self::get_images($image_2,$images);
        $images = self::get_images($image_3,$images);
        $images = self::get_images($image_4,$images);
        $images = self::get_images($image_5,$images);
        $node->set('field_images', $images);  
      }
      
      $node->save();
      sleep(1);
    }
    //中文（暂时不涉及双语）
    else{
      //查找英文的nid
      /**
      $nid = $con->select("node_field_data",'n')
      ->fields('n',array('nid'))
      ->condition('title',$id,'=')
      ->condition('langcode','en','=')
      ->execute()
      ->fetchfield();
      \Drupal::logger('importcontent')->info('nid'.$nid);
      $node = Node::load($nid);

      if ($node->hasTranslation('zh-hans')) {
        //删除中文
        $node->getUntranslated()->removeTranslation('zh-hans');
        $node->getUntranslated()->save();

        $translation = $node->addTranslation('zh-hans', $node->toArray());
        $translation->title = $id;
        $translation->field_zhongwenming->value = $zhongwenname;
        $translation->field_fenbu->value = $fenbu;
        if($fenlei != ''){
          $tid = $con->select("taxonomy_term_field_data",'ttd')
          ->fields('ttd',array('tid'))
          ->condition('name',$fenlei,'=')
          ->condition('langcode',$lan,'=')
          ->execute()
          ->fetchfield();
          if($tid > 0){
            $translation->field_fenlei->target_id = $tid;
          }
        }
        if($ladingming != ''){
          $translation->field_ladingming->value = $ladingming;  
        }
        if($pinyinming != ''){
          $translation->field_pinyinming->value = $pinyinming;
        }
        if($jiazhi != ''){
          $translation->field_yaoyongjiazhi->value = $jiazhi;
        }
        $node->save();
      }
      else{
        $translation = $node->addTranslation('zh-hans', $node->toArray());
        $translation->title = $id;
        $translation->field_zhongwenming->value = $zhongwenname;
        $translation->field_fenbu->value = $fenbu;
        if($fenlei != ''){
          $tid = $con->select("taxonomy_term_field_data",'ttd')
          ->fields('ttd',array('tid'))
          ->condition('name',$fenlei,'=')
          ->condition('langcode',$lan,'=')
          ->execute()
          ->fetchfield();
          if($tid > 0){
            $translation->field_fenlei->target_id = $tid;
          }
        }
        if($ladingming != ''){
          $translation->field_ladingming->value = $ladingming;  
        }
        if($pinyinming != ''){
          $translation->field_pinyinming->value = $pinyinming;
        }
        if($jiazhi != ''){
          $translation->field_yaoyongjiazhi->value = $jiazhi;
        }
        $node->save();

      }
     */
    }
    \Drupal::logger('importcontent')->info('title'.$title);
    
    $context['message'] = $message;
    $context['results'][] = $results;
  }
  public static function importcontentFinishedCallback($success, $results, $operations) {
    if ($success) {
      $message = \Drupal::translation()->formatPlural(
        count($results),
        '执行成功.', '执行成功.'
      );
    }
    else {
      $message = t('Finished with an error.');
    }
    \Drupal::messenger()->addMessage(t('%message', [
           '%message' => $message,
         ]));
  }
  public static function https_request($url, $data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
      curl_setopt($curl, CURLOPT_POST, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
  }
  public static function get_images($file_url,$images){
    if($file_url != ''){
      $client = \Drupal::httpClient();


      $file_content = file_get_contents($file_url);
      //$file_content = self::https_request($file_url);
      //获取图片名字
      $name_arr = explode('/', $file_url);
      $count = count($name_arr);
      $file_name = $name_arr[$count - 1];
      \Drupal::logger('importcontent')->info('file_name'.$file_name);
      $file_system = \Drupal::service('file_system');
      $directory = 'public://'.date('Ymd').'/';
      $file_system->prepareDirectory($directory, \Drupal\Core\File\FileSystemInterface::CREATE_DIRECTORY);
      $file = \Drupal::service('file.repository')->writedata($file_content, $directory.$file_name, \Drupal\Core\File\FileSystemInterface::EXISTS_REPLACE);
      //$client->get($file_url, ['save_to' => $directory.$file_name]);

      $fname = $file->getFilename();
      $fid = $file->id();
      if($fid > 0){
        $item = [
          'target_id' => $fid,
          'alt' => $fname,
        ];
        array_push($images, $item);  
      }

      /*
      $file_content = file_get_contents($file_url);
      //获取图片名字
      $name_arr = explode('/', $file_url);
      $count = count($name_arr);
      $file_name = $name_arr[$count - 1];
      \Drupal::logger('importcontent')->info('file_name'.$file_name);
      $file_system = \Drupal::service('file_system');
      $directory = 'public://'.date('Ymd').'/';
      $file_system->prepareDirectory($directory, \Drupal\Core\File\FileSystemInterface::CREATE_DIRECTORY);
      $file = \Drupal::service('file.repository')->writedata($file_content, $directory.$file_name, \Drupal\Core\File\FileSystemInterface::EXISTS_REPLACE);
      $fname = $file->getFilename();
      $fid = $file->id();
      if($fid > 0){
        $item = [
          'target_id' => $fid,
          'alt' => $fname,
        ];
        array_push($images, $item);  
      }
      */
    }
    return $images;
  }
}