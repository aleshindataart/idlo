<?php

namespace Drupal\news_counter\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a block to display the count of news nodes.
 *
 * @Block(
 *   id = "node_count_block",
 *   admin_label = @Translation("Node Count Block"),
 *   category = @Translation("Custom")
 * )
 */
class NodeCountBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $config = $this->getConfiguration();
    $content_type = $config['content_type'];

    $count = \Drupal::entityQuery('node')
      ->condition('type', $content_type)
      ->accessCheck(TRUE)
      ->count()
      ->execute();

    return [
      '#theme' => 'node_count_block',
      '#count' => $count,
      '#type' => $content_type,
    ];
//    return [
//      '#markup' => $this->t('There are @count nodes of type @type.', [
//        '@count' => $count,
//        '@type' => $content_type,
//      ]),
//    ];
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'content_type' => '',
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form = parent::blockForm($form, $form_state);

    $content_types = \Drupal\node\Entity\NodeType::loadMultiple();
    $options = [];
    foreach ($content_types as $type) {
      $options[$type->id()] = $type->label();
    }

    $form['content_type'] = [
      '#type' => 'select',
      '#title' => $this->t('Content Type'),
      '#options' => $options,
      '#default_value' => $this->configuration['content_type'],
      '#description' => $this->t('Select the content type to count nodes for.'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->setConfigurationValue('content_type', $form_state->getValue('content_type'));
  }

}
