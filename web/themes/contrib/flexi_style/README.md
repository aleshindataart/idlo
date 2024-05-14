## Table of contents

- Introduction
- Requirements
- Installation
- Configuration
- Create subtheme
- Features
- Maintainers


## Introduction

FlexiStyle is a pure CSS-based Drupal base theme. This theme
is fully compatible with Drupal 10. It is a dynamic and
modern custom theme designed specifically for Drupal. Its
theme completely overwrites standard root twig templates.
This theme is based on custom and flex box-based CSS. This
theme seamlessly integrates aesthetics with functionality,
offering a visually striking and user-friendly.

This theme is lightweight because we are attaching all the
CSS and JS libraries based on the components and disabling
unnecessary libraries. theme performance, best practices,
and SEO scores are high in a lighthouse.

The theme is fully responsive and mobile-first. In this
theme, we have added the latest version of the font-awesome
and Google material libraries for icons.

"Flexi Style" theme settings are manageable, You can change
the header, navbar, footer, and maintenance mode time
settings and styles from the theme appearance. Flexi Style
theme is fully supportable with Progressive web application
(PWA).

**Pre designed drupal core pages:**
- Error pages: 404 - page not found, 403 - Access Denied, Maintenance Page
- Search: Search result page
- Forums: Forums page, Forum topics page
- Comments: Listing of comments, comment form
- Forms: Contact form, Feedback form, Webforms


## Requirements

This theme requires Drupal core `>= 9.0`.
This theme does not require any theme and modules outside of Drupal core.


## Installation

Install as you would normally install a contributed Drupal theme.
Install with composer `composer require 'drupal/flexi_style'`
then enable the theme.


## Configuration

Go to the Administration » Appearance.
On the same page "**FlexiStyle**" theme and click on the
install and set as default.


## Create subtheme

1. You can create a subtheme through a shell script.
2. Install the "**FlexiStyle**" theme with the composer
   `composer require 'drupal/flexi_style'` but don't enable it.
3. Go to the theme folder from shell or command prompt
   : `cd themes/contrib/flexi_style`.
4. Run this command from the shell "Make script executable"
   : `chmod +x script/subtheme.sh`.
5. Run this command from the shell to launch the script
   : `sh script/subtheme.sh` or `./script/subtheme.sh`.
6. That script will ask the questions for you to create your subtheme.
	1. The `machine name` of your custom theme? `[e.g. mytheme_flexistyle]`:
    **mytheme_flexi_style**
	2. The `theme name` of your custom theme? `[e.g. Mytheme FlexiStyle]`:
    **Mytheme FlexiStyle**
7. Go to the administration -> **Appearance** and enable the
   `Mytheme FlexiStyle`.


## Features

- This theme is fully compatible with Drupal 10.
- User-defined column widths.
- Container and container-fluid (full width) layout.
- Flexbox CSS property for the layout and structure.
- The theme layout and structure are fully flexible.
- Easy to customize twigs and templates.
- Unique body classes are rendering based on the entities,
  users, roles, and header styles for the different UI.
- Global styling editor provided for instant changes on your
  page without modifying any CSS file from the server.
- Separate variable file for changing the sitewide theme color and sizes.
- Create a new Drupal custom theme with the subtheme folder.
- Completely overwrites standard root twig templates.
- Predefined Google Fonts.
- Predefined Fontawesome and Google material icons.
- Customize Header and footer custom classes.
- Multiple header styles are available.
- Header position changeable from UI.
- Change the header, navbar, footer, and maintenance mode time
  settings and styles from the theme appearance.
- This theme is based on atomic design patterns and classes.
- The theme follows the components-based twig and libraries.
- The theme follows mathematical functions in the CSS to
  manage the colors and sizes.
- The theme is Lightweight.
- The theme performance, best practices, and SEO scores
  are high in a lighthouse.
- The theme is fully support Progressive Web Apps (PWA).
- The theme is fully responsive and mobile-friendly.
- The theme is Cross-browser-compatible.
- Pre-designed error pages like 403 access denied, 404 page
  not found, and maintenance page.
- Dismissable alert messages.
- Use predefined classes for the perfect UI.


## Maintainers

- Anoop Singh - [anoopsingh92](https://www.drupal.org/u/anoopsingh92)
