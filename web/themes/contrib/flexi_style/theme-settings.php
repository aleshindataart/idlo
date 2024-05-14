<?php

/**
 * @file
 * Theme settings form for FlexiStyle theme.
 */

declare(strict_types=1);

use Drupal\Core\Form\FormState;

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function flexi_style_form_system_theme_settings_alter(array &$form, FormState $form_state): void {
  $form['theme_settings']['#open'] = FALSE;
  $form['logo']['#open'] = FALSE;
  $form['favicon']['#open'] = FALSE;

  $form['flexi_style_tabs'] = [
    '#type' => 'vertical_tabs',
    '#prefix' => '<h2><small>' . t('FlexiStyle Settings') . '</small></h2>',
    '#weight' => -10,
  ];

  $form['flexi_global'] = [
    '#type' => 'details',
    '#title' => t('Global Settings'),
    '#open' => TRUE,
    '#group' => 'flexi_style_tabs',
  ];
  $form['flexi_top_header'] = [
    '#type' => 'details',
    '#title' => t('Top Header Settings'),
    '#open' => TRUE,
    '#group' => 'flexi_style_tabs',
  ];
  $form['flexi_header'] = [
    '#type' => 'details',
    '#title' => t('Header Settings'),
    '#open' => TRUE,
    '#group' => 'flexi_style_tabs',
  ];

  $form['flexi_footer'] = [
    '#type' => 'details',
    '#title' => t('Footer Settings'),
    '#open' => TRUE,
    '#group' => 'flexi_style_tabs',
  ];
  $form['flexi_maintenance_mode'] = [
    '#type' => 'details',
    '#title' => t('Maintenance Mode Settings'),
    '#open' => TRUE,
    '#group' => 'flexi_style_tabs',
  ];
  $form['flexi_global']['fonts'] = [
    '#type' => 'select',
    '#title' => t('Fonts'),
    '#default_value' => theme_get_setting('fonts'),
    '#options' => [
      'helvetica' => t('Helvetica, "Trebuchet MS", Verdana, sans-serif'),
      'verdana' => t('Verdana, sans-serif'),
      'open-sans' => t('Open Sans, sans-serif'),
      'roboto' => t('Roboto, sans-serif'),
      'lato' => t('Lato, sans-serif'),
      'poppins' => t('Poppins, sans-serif'),
    ],
  ];
  $form['flexi_global']['icons'] = [
    '#type' => 'select',
    '#title' => t('Icons'),
    '#default_value' => theme_get_setting('icons'),
    '#options' => [
      'none' => t('None'),
      'fontawesome' => t('Font Awesome'),
      'google-material' => t('Google Material'),
    ],
  ];
  $form['flexi_global']['global_style'] = [
    '#type' => 'textarea',
    '#title' => t('Global Styling'),
    '#placeholder' => t('Global CSS'),
    '#default_value' => theme_get_setting('global_style'),
  ];
  $form['flexi_top_header']['top_header_bg'] = [
    '#type' => 'select',
    '#title' => t('Top Header Background'),
    '#default_value' => theme_get_setting('top_header_bg'),
    '#options' => [
      'bg-transparent' => t('bg-transparent'),
      'bg-white' => t('bg-white'),
      'bg-black' => t('bg-black'),
      'bg-light' => t('bg-light'),
      'bg-gray' => t('bg-gray'),
      'bg-dark' => t('bg-dark'),
      'bg-primary' => t('bg-primary'),
      'bg-primary-dark' => t('bg-primary-dark'),
      'bg-secondary' => t('bg-secondary'),
      'bg-secondary-dark' => t('bg-secondary-dark'),
      'bg-green' => t('bg-green'),
      'bg-green-dark' => t('bg-green-dark'),
      'bg-red' => t('bg-red'),
      'bg-red-dark' => t('bg-red-dark'),
    ],
  ];
  $form['flexi_top_header']['top_header_classes'] = [
    '#type' => 'textfield',
    '#title' => t('Top Header Classes'),
    '#placeholder' => t('Top Header Classes'),
    '#default_value' => theme_get_setting('top_header_classes'),
    '#description' => t('Add multiple top header custom classes with the space for example "shadow any_custom_class".'),
  ];
  $form['flexi_header']['header_position'] = [
    '#type' => 'select',
    '#title' => t('Header Position'),
    '#default_value' => theme_get_setting('header_position'),
    '#options' => [
      'normal' => t('Normal'),
      'sticky' => t('Sticky'),
    ],
  ];
  $form['flexi_header']['header_style'] = [
    '#type' => 'select',
    '#title' => t('Header Style'),
    '#default_value' => theme_get_setting('header_style'),
    '#options' => [
      'style-1' => t('Header Style 1'),
      'style-2' => t('Header Style 2'),
      'style-3' => t('Header Style 3'),
    ],
  ];
  $form['flexi_header']['header_navbar_bg'] = [
    '#type' => 'select',
    '#title' => t('Header Navbar Background'),
    '#default_value' => theme_get_setting('header_navbar_bg'),
    '#options' => [
      'bg-transparent' => t('bg-transparent'),
      'bg-white' => t('bg-white'),
      'bg-black' => t('bg-black'),
      'bg-light' => t('bg-light'),
      'bg-gray' => t('bg-gray'),
      'bg-dark' => t('bg-dark'),
      'bg-primary' => t('bg-primary'),
      'bg-primary-dark' => t('bg-primary-dark'),
      'bg-secondary' => t('bg-secondary'),
      'bg-secondary-dark' => t('bg-secondary-dark'),
      'bg-green' => t('bg-green'),
      'bg-green-dark' => t('bg-green-dark'),
      'bg-red' => t('bg-red'),
      'bg-red-dark' => t('bg-red-dark'),
    ],
    '#states' => [
      'visible' => [
        [':input[name="header_style"]' => ['value' => 'style-2']],
        'or',
        [':input[name="header_style"]' => ['value' => 'style-3']],
      ],
    ],
  ];
  $form['flexi_header']['header_classes'] = [
    '#type' => 'textfield',
    '#title' => t('Header Classes'),
    '#placeholder' => t('Header Classes'),
    '#default_value' => theme_get_setting('header_classes'),
    '#description' => t('Add multiple header custom classes with the space for example "shadow any_custom_class".'),
  ];
  $form['flexi_footer']['footer_bg'] = [
    '#type' => 'select',
    '#title' => t('Footer Background'),
    '#default_value' => theme_get_setting('footer_bg'),
    '#options' => [
      'bg-transparent' => t('bg-transparent'),
      'bg-white' => t('bg-white'),
      'bg-black' => t('bg-black'),
      'bg-light' => t('bg-light'),
      'bg-gray' => t('bg-gray'),
      'bg-dark' => t('bg-dark'),
      'bg-primary' => t('bg-primary'),
      'bg-primary-dark' => t('bg-primary-dark'),
      'bg-secondary' => t('bg-secondary'),
      'bg-secondary-dark' => t('bg-secondary-dark'),
      'bg-green' => t('bg-green'),
      'bg-green-dark' => t('bg-green-dark'),
      'bg-red' => t('bg-red'),
      'bg-red-dark' => t('bg-red-dark'),
    ],
  ];
  $form['flexi_footer']['footer_classes'] = [
    '#type' => 'textfield',
    '#title' => t('Footer Classes'),
    '#placeholder' => t('Footer Classes'),
    '#default_value' => theme_get_setting('footer_classes'),
    '#description' => t('Add multiple footer custom classes with the space for example "border-top any_custom_class".'),
  ];
  $form['flexi_footer']['footer_bottom_bg'] = [
    '#type' => 'select',
    '#title' => t('Footer Bottom Background'),
    '#default_value' => theme_get_setting('footer_bottom_bg'),
    '#options' => [
      'bg-transparent' => t('bg-transparent'),
      'bg-white' => t('bg-white'),
      'bg-black' => t('bg-black'),
      'bg-light' => t('bg-light'),
      'bg-gray' => t('bg-gray'),
      'bg-dark' => t('bg-dark'),
      'bg-primary' => t('bg-primary'),
      'bg-primary-dark' => t('bg-primary-dark'),
      'bg-secondary' => t('bg-secondary'),
      'bg-secondary-dark' => t('bg-secondary-dark'),
      'bg-green' => t('bg-green'),
      'bg-green-dark' => t('bg-green-dark'),
      'bg-red' => t('bg-red'),
      'bg-red-dark' => t('bg-red-dark'),
    ],
  ];
  $form['flexi_footer']['footer_bottom_classes'] = [
    '#type' => 'textfield',
    '#title' => t('Footer Bottom Classes'),
    '#placeholder' => t('Footer Bottom Classes'),
    '#default_value' => theme_get_setting('footer_bottom_classes'),
    '#description' => t('Add multiple Footer Bottom custom classes with the space for example "border-top any_custom_class".'),
  ];
  $form['flexi_maintenance_mode']['maintenance_mode_time'] = [
    '#type' => 'select',
    '#title' => t('Maintenance Mode Time'),
    '#default_value' => theme_get_setting('maintenance_mode_time'),
    '#options' => [
      '1-Hour' => t('1 Hour'),
      '2-Hours' => t('2 Hours'),
      '3-Hours' => t('3 Hours'),
      '4-Hours' => t('4 Hours'),
      '5-Hours' => t('5 Hours'),
      '6-Hours' => t('6 Hours'),
      '7-Hours' => t('7 Hours'),
      '8-Hours' => t('8 Hours'),
    ],
  ];
}
