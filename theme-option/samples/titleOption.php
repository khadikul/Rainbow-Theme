<?php

CSF::createSection( $prefix, array(
    'id'          => 'title',
    'title'       => 'Title',
    'icon'        => 'fas fa-grip-vertical',
    'description' => '<h1>Title</h1>',
    'fields'      => array(
        array(
            'id'      => 'hide-bloginfo',
            'title'   => 'Hide Bloginfo Area',
            'type'    => 'switcher',
            'default' => true,
        ),

        array(
            'id'      => 'title-hide',
            'title'   => 'Hide Title Area',
            'type'    => 'switcher',
            'default' => true,
        ),
    ),
));