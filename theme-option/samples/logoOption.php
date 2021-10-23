<?php

CSF::createSection( $prefix, array(
    'title'       => 'Logo',
    'icon'        => 'fab fa-pied-piper',
    'description' => '<h1>Logo</h1>',
    'fields'      => array(

        array(
            'id'       => 'header-logo',
            'title'    => 'Header Logo',
            'type'     => 'media',
        ),

        array(
            'id'       => 'header-logo-width',
            'title'    => 'Header Logo Width(px)',
            'type'     => 'text',
            'default'  => '150px'
        ),

        array(
            'id'       => 'footer-logo',
            'title'    => 'Footer Logo',
            'type'     => 'media',
        ),

        array(
            'id'       => 'footer-logo-width',
            'title'    => 'Footer Logo Width(px)',
            'type'     => 'text',
            'default'  => '250px',
        ),
    ),

));