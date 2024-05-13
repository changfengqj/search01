<?php
namespace Drupal\commblock\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Url;
use Drupal\user\Entity\User;
use Drupal\file\Entity\File;

/**
 * Implements the SimpleForm form controller.
 *
 * This example demonstrates a simple form with a singe text input element. We
 * extend FormBase which is the simplest form base class used in Drupal.
 *
 * @see \Drupal\Core\Form\FormBase
 */
class productFilterForm extends FormBase {

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
    $params = \Drupal::request()->query->all();
    $keywords = isset($params['keywords'])?$params['keywords']:'';
    $form['keywords'] = [
      '#type' => 'textfield',
      //'#title' => $this->t('Keywords'),
      '#default_value' => $keywords,
    ];
    $form['actions'] = [
      '#type' => 'actions',
    ];
    $form['actions']['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Search'),
    ];
    return $form;
  }

  public function getFormId() {
    return 'repeatsfinder_form';
  }

  public function validateForm(array &$form, FormStateInterface $form_state) {
    $keywords = $form_state->getValue('keywords');
    if($keywords == '' || strlen($keywords) == 0){
      $form_state->setErrorByName('keywords',$this->t('keywords can not be empty'));
    }
  }

  public function submitForm(array &$form, FormStateInterface $form_state) {
    $current_path = '/product-list/search';
    $keywords = $form_state->getValue('keywords');
    if($keywords != ''){
      $query_arr['title'] =  $keywords;
    }
    $query_arr['key'] =  rand(10000,999999);
    $url = Url::fromUri('internal:'.$current_path,array('query' =>$query_arr));
    $form_state->setRedirectUrl($url);
  }
}
