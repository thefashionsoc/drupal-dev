<?php

namespace Drupal\rh_user\Plugin\RabbitHoleEntityPlugin;

use Drupal\rabbit_hole\Plugin\RabbitHoleEntityPluginBase;

/**
 * Implements rabbit hole behavior for nodes.
 *
 * @RabbitHoleEntityPlugin(
 *  id = "rh_user",
 *  label = @Translation("Node"),
 *  entityType = "user"
 * )
 */
class User extends RabbitHoleEntityPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getFormSubmitHandlerAttachLocations() {
    return array(
      array('actions', 'submit', '#submit'),
    );
  }

  /**
   * {@inheritdoc}
   */
  public function getGlobalConfigFormId() {
    return "user_admin_settings";
  }

  /**
   * {@inheritdoc}
   */
  public function getGlobalFormSubmitHandlerAttachLocations() {
    return array(array('actions', 'submit', '#submit'));
  }

}
