/**
 * @file
 * FlexiStyle behaviors.
 */
(function ($, Drupal) {

  'use strict';

  Drupal.behaviors.flexiStyle = {
    attach(context, settings) {
      // console.log('It works!');
      // Responsive menu item toggle button for secondary nav.
      $('.flex-secondary-menu .btn-toggle').click(function () {
        $('.flex-secondary-menu .btn-toggle').toggleClass('open');
        $('.flex-secondary-menu #secondary-nav').toggleClass('secondary-nav-mobile');
      });

      // Responsive menu item toggle button for primary nav.
      $('.flex-header .flex-primary-menu .btn-toggle').click(function () {
        $('.flex-header .flex-primary-menu .btn-toggle').toggleClass('open');
        $('.flex-header .flex-primary-menu .primary-nav').toggleClass('primary-nav-mobile');
        $('.flex-header .flex-primary-menu .btn-toggle .fa-bars').toggleClass('fa-close');
      });
      $('.flex-header .flex-primary-menu .btn-toggle').click(function () {
        $('.flex-header .flex-primary-menu .btn-toggle .material-icons').text('close');
      });
      $('.flex-header .flex-primary-menu .open').click(function () {
        $('.flex-header .flex-primary-menu .btn-toggle .material-icons').text('menu_open');
      });

      // Hide alert messages click on the close button.
      $('.messages .close').click(function () {
        $('.messages').addClass('hide');
      });
    }
  };
} (jQuery, Drupal));
