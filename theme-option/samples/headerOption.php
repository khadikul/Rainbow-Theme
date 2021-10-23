<?php

//header top
CSF::createSection( $prefix, array(
    'id'          => 'header-top',
    'title'      => ' Header Top',
    'icon'        => 'fas fa-sort-amount-up-alt',
    'description' => '<h1>Header</h1>',
    'fields'      => array(

        array(
            'id'       => 'header-top-hide',
            'title'    => 'Header Top Show/Hide',
            'type'     => 'switcher',
            'default' => true,
        ),

        array(
            'id'      => 'header-top-bg-color',
            'title'   => 'Header Top Background Color',
            'type'    => 'color',
            'default' => '#ff6890'

        ),

        array(
            'id'      => 'header-top-padding',
            'title'   => 'Header Top Padding(px)',
            'type'    => 'text',
            'default' => '15px 0',

        ),

        array(
            'id'        => 'top-header-icon',
            'title'     => 'Icon',
            'type'      => 'icon',
            'default'   => 'fa fa-envelope',
        ),

        array(
            'id'        => 'top-header-text',
            'title'     => 'Text',
            'type'      => 'text',
            'default'   => ' info@agency.com',
        ),

        array(
            'id'        => 'top-header-icon1',
            'title'     => 'Icon',
            'type'      => 'icon',
            'default'   => 'fa fa-phone',
        ),


        array(
            'id'        => 'top-header-text1',
            'title'     => 'Text',
            'type'      => 'text',
            'default'   => ' 23457689',
        ),

        array(
            'id'        => 'icon-group',
            'title'     => 'Header Top Social Icon Group',
            'type'      => 'group',
            'fields'    => array(
                array(
                    'id'      => 'social-icon',
                    'title'   => 'Social Icon',
                    'type'    => 'icon',
                ),

            ),

            'default'   => array(

                array(
                    'social-icon'   => 'fab fa-facebook',
                ),

                array(
                    'social-icon'   => 'fab fa-twitter',
                ),

                array(
                    'social-icon'   => 'fab fa-linkedin',
                ),

                array(
                    'social-icon'   => 'fab fa-instagram',
                ),

                array(
                    'social-icon'   => 'fab fa-google-plus-g',
                ),
                
            ),

        ),
    ),

));



//main header
CSF::createSection( $prefix, array(
    'id'          => 'header',
    'title'       => 'Header',
    'icon'        => 'fa fa-header',
    'description' => '<h1>Header</h1>',
    'fields'      => array(

        array(
            'id'       => 'header-sticky',
            'title'    => 'Header fixed/sticky',
            'type'     => 'switcher',
            'default'  =>  true,
        ),

        array(
            'id'        => 'header-bg-color',
            'title'     => 'Header Background Color',
            'type'      => 'color',
            'default'   => '#33ddbe',
        ),

        array(
            'id'        => 'header-padding',
            'title'     => 'Header Padding(px)',
            'type'      => 'text',
            'default'   => '10px 0'
        ),

        array(
            'id'        => 'header-menu-font-size',
            'title'     => 'Header Menu Font Size(px)',
            'type'      => 'text',
            'default'   => '14px'
        ),

        array(
            'id'        => 'header-menu-color',
            'title'     => 'Header Menu Color',
            'type'      => 'color',
            'default'   => '#000'
        ),

        array(
            'id'        => 'header-menu-hover-color',
            'title'     => 'Header Menu Hover Color',
            'type'      => 'color',
            'default'   => '#b7103d'
        ),

        array(
            'id'       => 'sticky-header-bg-color',
            'title'    => 'Sticky Header Background Color',
            'type'     => 'color',
            'default'  => '#ff6890',
        ),

        array(
            'id'       => 'sticky-header-manu-color',
            'title'    => 'Sticky Header Manu Color',
            'type'     => 'color',
            'default'  => '#fff',
        ),

        
    ),

));

