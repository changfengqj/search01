<?php

namespace Drupal\commblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\user\Entity\User;

/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "username_block",
 *   admin_label = @Translation("左上角用户名")
 * )
 */
class UsernameBlock extends BlockBase {

  /**
   * {@inheritdoc}
   *
   * The return value of the build() method is a renderable array. Returning an
   * empty array will result in empty block contents. The front end will not
   * display empty blocks.
   */
  public function build() {
    $account = \Drupal::currentUser();
    $current_uid = $account->id();
    $account_load = User::load($current_uid);
    
    if($current_uid > 0){
      $username = $account_load->get('name')->getString();
      $output = '<span class="username"> <a href="#"><i class="fa fa-user"></i>'.$username.'</a></span>';
    }
    else{
      $output = '<span class="username"> <a href="/user/login"><i class="fa fa-user"></i>'.t('Log in').'</a></span>';
    }
    $build = [
      '#markup' => $output,
      '#cache' => [
        'max-age' => 0
      ],
    ];
    return $build;
  }

}
