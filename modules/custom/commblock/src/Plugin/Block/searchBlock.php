<?php

namespace Drupal\commblock\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\user\Entity\User;

/**
 * Provides a 'Example: empty block' block.
 *
 * @Block(
 *   id = "frontBlock",
 *   admin_label = @Translation("自定义查询")
 * )
 */
class searchBlock extends BlockBase {

  /**
   * {@inheritdoc}
   *
   * The return value of the build() method is a renderable array. Returning an
   * empty array will result in empty block contents. The front end will not
   * display empty blocks.
   */
  public function build() {
    $filter_form = \Drupal::formBuilder()->getForm('Drupal\commblock\Form\productFilterForm');
    $build['form'] = $filter_form;
    return $build;
  }

}
