<?php


namespace Drupal\tfs_blog\Plugin\DsField;


use Drupal\ds\Annotation\DsField;
use Drupal\ds\Plugin\DsField\DsFieldBase;

/**
 * Class NodeStats
 * @package Drupal\tfs_blog\Plugin\DsField
 *
 * @DsField(
 *   id = "node_stats",
 *   title = @Translation("Node stats"),
 *   entity_type = "node",
 *   ui_limit={"article|*"}
 * )
 */
class NodeStats extends DsFieldBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $hits = statistics_get($this->entity()->id());
    $output = [
      '#markup' => $this->formatPlural($hits['totalcount'], '1 view', '@count views')
    ];

    return $output; // TODO: Change the autogenerated stub
  }
}