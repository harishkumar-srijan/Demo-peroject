<?php

namespace Drupal\ckeditor_google_search\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\editor\Entity\Editor;
use Drupal\Core\StringTranslation\StringTranslationTrait;

/**
 * Defines the "Google Search" plugin.
 *
 * @CKEditorPlugin(
 *   id = "googlesearch",
 *   label = @Translation("Google Search"),
 *   module = "ckeditor_google_search"
 * )
 */
class GoogleSearch extends CKEditorPluginBase {
  use StringTranslationTrait;

  /**
   * {@inheritdoc}
   */
  public function getFile() {
    return $this->getPluginPath() . '/plugin.js';
  }

  /**
   * {@inheritdoc}
   */
  public function getDependencies(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function getLibraries(Editor $editor) {
    return [];
  }

  /**
   * {@inheritdoc}
   */
  public function isInternal() {
    return FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function getButtons() {
    return [
      'googlesearch' => [
        'label' => $this->t('Google Search'),
        'image' => $this->getPluginPath() . '/icons/googlesearch.png',
      ],
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function isEnabled(Editor $editor) {
  }

  /**
   * {@inheritdoc}
   */
  public function getConfig(Editor $editor) {
    return [];
  }

  /**
   * Get plugin path.
   */
  private function getPluginPath() {
    return 'libraries/googlesearch';
  }

}
