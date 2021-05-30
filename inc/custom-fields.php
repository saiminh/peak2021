<?php
/**
 * ACF Custom Fields
 *
 * @package peak2021
 * 
 */

 if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
  'key' => 'group_60b3f5c5737ac',
  'title' => 'Blogroll Tile',
  'fields' => array(
    array(
      'key' => 'field_60b3f5ce2981a',
      'label' => 'Tile Background Color',
      'name' => 'tile-bg-color',
      'type' => 'select',
      'instructions' => 'Color of the post\'s tile on the blog page',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'choices' => array(
        'white' => 'White',
        'pink' => 'Peak Pink',
        'green' => 'Peak Green',
        'cyan' => 'Peak Cyan',
        'blue' => 'Peak Blue',
        'yellow' => 'Peak Yellow',
        'red' => 'Peak Red',
      ),
      'default_value' => 'white',
      'allow_null' => 0,
      'multiple' => 0,
      'ui' => 0,
      'return_format' => 'value',
      'ajax' => 0,
      'placeholder' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'post',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'side',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => '',
  'active' => true,
  'description' => '',
));

acf_add_local_field_group(array(
  'key' => 'group_60ae28fce4171',
  'title' => 'Founders',
  'fields' => array(
    array(
      'key' => 'field_60b23974f7176',
      'label' => 'Exit',
      'name' => 'exit',
      'type' => 'true_false',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'message' => '',
      'default_value' => 0,
      'ui' => 0,
      'ui_on_text' => '',
      'ui_off_text' => '',
    ),
    array(
      'key' => 'field_60ae2965a147a',
      'label' => 'Year',
      'name' => 'year',
      'type' => 'number',
      'instructions' => 'Choose year',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => 2021,
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'min' => '',
      'max' => '',
      'step' => '',
    ),
    array(
      'key' => 'field_60ae29caa147b',
      'label' => 'Amount',
      'name' => 'amount',
      'type' => 'text',
      'instructions' => '',
      'required' => 0,
      'conditional_logic' => 0,
      'wrapper' => array(
        'width' => '',
        'class' => '',
        'id' => '',
      ),
      'default_value' => '€2.2M',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'maxlength' => '',
    ),
  ),
  'location' => array(
    array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'founders',
      ),
    ),
  ),
  'menu_order' => 0,
  'position' => 'side',
  'style' => 'default',
  'label_placement' => 'top',
  'instruction_placement' => 'label',
  'hide_on_screen' => array(
    0 => 'excerpt',
    1 => 'discussion',
    2 => 'comments',
    3 => 'revisions',
    4 => 'slug',
    5 => 'author',
    6 => 'featured_image',
    7 => 'tags',
    8 => 'send-trackbacks',
  ),
  'active' => true,
  'description' => '',
));

endif;