<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'rainbow';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Rainbow',
  'menu_slug'  => 'rainbow',
  'menu_icon'  => 'dashicons-admin-multisite',
  'framework_title' => 'Rainbow Option',
) );


//my field
//logo Option
require get_template_directory(  ).'/theme-option/samples/logoOption.php';

//my field
//logo Option
require get_template_directory(  ).'/theme-option/samples/headerOption.php';

//footer option
require get_template_directory(  ).'/theme-option/samples/footerOptions.php';


//title option
require get_template_directory(  ).'/theme-option/samples/titleOption.php';




//
// Field: backup
//
CSF::createSection( $prefix, array(
  'title'       => 'Backup',
  'icon'        => 'fas fa-shield-alt',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=backup" target="_blank">Field: backup</a>',
  'fields'      => array(

    array(
      'type' => 'backup',
    ),

  )
) );

//
// Others
//
CSF::createSection( $prefix, array(
  'title'       => 'Others',
  'icon'        => 'fas fa-bolt',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/fields?id=others" target="_blank">Others</a>',
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'This is a heading field',
    ),

    array(
      'type'    => 'subheading',
      'content' => 'This is a subheading field',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'success',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'info',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'warning',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'danger',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'warning',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'danger',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a <strong>content</strong> field. You can write some contents here.',
    ),

  )
) );
