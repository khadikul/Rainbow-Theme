<?php

CSF::createSection( $prefix, array(
    'id'          => 'footer1',
    'title'       => 'Footer',
    'icon'        => 'fas fa-sort-amount-down-alt',
    'description' => '<h1>Footer</h1>',
    'fields'     => array(

        array(
            'id'     => 'footer-bg',
            'title'  => 'Footer Background',
            'type'   => 'background',
            'output' => '.footer-area',
            'default' => array(

                'background-color' => '#33ddbe',

            ),
        ),

        array(
            'id'     => 'footer-text',
            'title'  => 'Footer Description',
            'type'   => 'textarea',
        ),

    ),

));

CSF::createSection( $prefix, array(
    'id'          => 'copyright',
    'title'       => 'CopyRight',
    'icon'        => 'fas fa-copyright',
    'description' => '<h1>CopyRight  Part</h1>',
    'fields'      => array(
        array(
            'id'      => 'copyright-text',
            'title'   => 'CopyRight Text',
            'type'    => 'wp_editor',
            'default' => 'rainbow All Rights Reserved 2021'
        ),

        array(
            'id'      => 'copyright-text-color',
            'title'   => 'CopyRight Text Color',
            'type'    => 'color',
            'default' => '#fff'
        ),

        array(
            'id'      => 'copyright-text-size',
            'title'   => 'CopyRight Text Size',
            'type'    => 'text',
            'default' => '15px',
        ),

        array(
            'id'      => 'copyright-social-icon',
            'title'   => 'CopyRight Social Icon',
            'type'    => 'group',
            'fields'  => array(
                array(
                    'id'     => 'footer-social-icon',
                    'title'  => 'Footer Social Icon',
                    'type'   => 'icon',
                ),
            ),

            'default'   => array(

                array(
                    'footer-social-icon'   => 'fab fa-facebook',
                ),

                array(
                    'footer-social-icon'   => 'fab fa-twitter',
                ),

                array(
                    'footer-social-icon'   => 'fab fa-linkedin',
                ),

                array(
                    'footer-social-icon'   => 'fab fa-instagram',
                ),

                array(
                    'footer-social-icon'   => 'fab fa-google-plus-g',
                ),
                
            ),
            
        ),
    )
));



CSF::createSection( $prefix, array(
    'id'          => 'footer',
    'title'       => 'Footer Font',
    'icon'        => 'fas fa-sort-amount-down-alt',
));

CSF::createSection( $prefix, array(
    'parent'      => 'footer',
    'title'       => 'Paragrhap',
    'icon'        => 'fab fa-asymmetrik',
    'description' => '<h1>Paragrhap</h1>',
    'fields'      => array(

        array(
            'id'      => 'footer-paragrhap-color',
            'title'   => 'Footer Paragrhap Color',
            'type'    => 'color',
            'default' => '#fff',
        ),

        array(
            'id'      => 'footer-paragrhap-size',
            'title'   => 'Footer Paragrhap Text Size(px)',
            'type'    => 'text',
            'default' => '15px',
        ),

        array(
            'id'      => 'footer-paragrhap-line-height',
            'title'   => 'Footer Paragrhap Line Height(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-paragrhap-margin',
            'title'   => 'Footer Paragrhap Margin(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-paragrhap-padding',
            'title'   => 'Footer Paragrhap Padding(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-paragrhap-transfrome',
            'title'   => 'Footer Paragrhap Text Transfrome',
            'type'    => 'select',
            'options' => array(
                'none'        => 'None',
                'capitalize'  => 'Capitalize',
                'uppercase'   => 'Uppercase',
                'inherit'     => 'Inherit'
            ),
            'default' => '',
        ),

        array(
            'id'      => 'footer-paragrhap-text-align',
            'title'   => 'Footer Paragrhap Text Align',
            'type'    => 'select',
            'options' => array(
                'center'   => 'Center',
                'right'    => 'Right',
                'left'     => 'Left',

            ),
            'default'  => 'Center',
        ),
    )

));


CSF::createSection( $prefix, array(
    'parent'      => 'footer',
    'title'       => 'Heading 1',
    'icon'        => 'fab fa-asymmetrik',
    'description' => '<h1>Heading 1</h1>',
    'fields'      => array(

        array(
            'id'      => 'footer-heading-1-color',
            'title'   => 'Footer Heading 1 Color',
            'type'    => 'color',
            'default' => '#fff',
        ),

        array(
            'id'      => 'footer-heading-1-size',
            'title'   => 'Footer Heading 1 Text Size(px)',
            'type'    => 'text',
            'default' => '15px',
        ),

        array(
            'id'      => 'footer-heading-1-line-height',
            'title'   => 'Footer Heading 1 Line Height(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-1-margin',
            'title'   => 'Footer Heading 1 Margin(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-1-padding',
            'title'   => 'Footer Heading 1 Padding(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-1-transfrome',
            'title'   => 'Footer Heading 1 Text Transfrome',
            'type'    => 'select',
            'options' => array(
                'none'        => 'None',
                'capitalize'  => 'Capitalize',
                'uppercase'   => 'Uppercase',
                'inherit'     => 'Inherit'
            ),
            'default' => '',
        ),

        array(
            'id'      => 'footer-heading-1-text-align',
            'title'   => 'Footer Heading 1 Text Align',
            'type'    => 'select',
            'options' => array(
                'center'   => 'Center',
                'right'    => 'Right',
                'left'     => 'Left',

            ),
            'default'  => 'Center',
        ),
    )

));


CSF::createSection( $prefix, array(
    'parent'      => 'footer',
    'title'       => 'Heading 2',
    'icon'        => 'fab fa-asymmetrik',
    'description' => '<h1>Heading 2</h1>',
    'fields'      => array(

        array(
            'id'      => 'footer-heading-2-color',
            'title'   => 'Footer Heading 2 Color',
            'type'    => 'color',
            'default' => '#fff',
        ),

        array(
            'id'      => 'footer-heading-2-size',
            'title'   => 'Footer Heading 2 Text Size(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-2-line-height',
            'title'   => 'Footer Heading 2 Line Height(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-2-margin',
            'title'   => 'Footer Heading 2 Margin(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-2-padding',
            'title'   => 'Footer Heading 2 Padding(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-2-transfrome',
            'title'   => 'Footer Heading 2 Text Transfrome',
            'type'    => 'select',
            'options' => array(
                'none'        => 'None',
                'capitalize'  => 'Capitalize',
                'uppercase'   => 'Uppercase',
                'inherit'     => 'Inherit'
            ),
            'default' => 'None',
        ),

        array(
            'id'      => 'footer-heading-2-text-align',
            'title'   => 'Footer Heading 2 Text Align',
            'type'    => 'select',
            'options' => array(
                'center'   => 'Center',
                'right'    => 'Right',
                'left'     => 'Left',

            ),
            'default'  => 'Center',
        ),
    ),

));

CSF::createSection( $prefix, array(
    'parent'      => 'footer',
    'title'       => 'Heading 3',
    'icon'        => 'fab fa-asymmetrik',
    'description' => '<h1>Heading 3</h1>',
    'fields'      => array(

        array(
            'id'      => 'footer-heading-3-color',
            'title'   => 'Footer Heading 3 Color',
            'type'    => 'color',
            'default' => '#fff',
        ),

        array(
            'id'      => 'footer-heading-3-size',
            'title'   => 'Footer Heading 3 Text Size(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-3-line-height',
            'title'   => 'Footer Heading 3 Line Height(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-3-margin',
            'title'   => 'Footer Heading 3 Margin(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-3-padding',
            'title'   => 'Footer Heading 3 Padding(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-3-transfrome',
            'title'   => 'Footer Heading 3 Text Transfrome',
            'type'    => 'select',
            'options' => array(
                'none'        => 'None',
                'capitalize'  => 'Capitalize',
                'uppercase'   => 'Uppercase',
                'inherit'     => 'Inherit'
            ),
            'default' => 'None',
        ),

        array(
            'id'      => 'footer-heading-3-text-align',
            'title'   => 'Footer Heading 3 Text Align',
            'type'    => 'select',
            'options' => array(
                'center'   => 'Center',
                'right'    => 'Right',
                'left'     => 'Left',

            ),
            'default'  => 'Center',
        ),
    ),

));

CSF::createSection( $prefix, array(
    'parent'      => 'footer',
    'title'       => 'Heading 4',
    'icon'        => 'fab fa-asymmetrik',
    'description' => '<h1>Heading 4</h1>',
    'fields'      => array(

        array(
            'id'      => 'footer-heading-4-color',
            'title'   => 'Footer Heading 4 Color',
            'type'    => 'color',
            'default' => '#fff',
        ),

        array(
            'id'      => 'footer-heading-4-size',
            'title'   => 'Footer Heading 4 Text Size(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-4-line-height',
            'title'   => 'Footer Heading 4 Line Height(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-4-margin',
            'title'   => 'Footer Heading 4 Margin(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-4-padding',
            'title'   => 'Footer Heading 4 Padding(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-4-transfrome',
            'title'   => 'Footer Heading 4 Text Transfrome',
            'type'    => 'select',
            'options' => array(
                'none'        => 'None',
                'capitalize'  => 'Capitalize',
                'uppercase'   => 'Uppercase',
                'inherit'     => 'Inherit'
            ),
            'default' => 'None',
        ),

        array(
            'id'      => 'footer-heading-4-text-align',
            'title'   => 'Footer Heading 4 Text Align',
            'type'    => 'select',
            'options' => array(
                'center'   => 'Center',
                'right'    => 'Right',
                'left'     => 'Left',

            ),
            'default'  => 'Center',
        ),
    ),

));

CSF::createSection( $prefix, array(
    'parent'      => 'footer',
    'title'       => 'Heading 5',
    'icon'        => 'fab fa-asymmetrik',
    'description' => '<h1>Heading 5</h1>',
    'fields'      => array(

        array(
            'id'      => 'footer-heading-5-color',
            'title'   => 'Footer Heading 5 Color',
            'type'    => 'color',
            'default' => '#fff',
        ),

        array(
            'id'      => 'footer-heading-5-size',
            'title'   => 'Footer Heading 5 Text Size(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-5-line-height',
            'title'   => 'Footer Heading 5 Line Height(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-5-margin',
            'title'   => 'Footer Heading 5 Margin(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-5-padding',
            'title'   => 'Footer Heading 5 Padding(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-5-transfrome',
            'title'   => 'Footer Heading 5 Text Transfrome',
            'type'    => 'select',
            'options' => array(
                'none'        => 'None',
                'capitalize'  => 'Capitalize',
                'uppercase'   => 'Uppercase',
                'inherit'     => 'Inherit'
            ),
            'default' => 'None',
        ),

        array(
            'id'      => 'footer-heading-5-text-align',
            'title'   => 'Footer Heading 5 Text Align',
            'type'    => 'select',
            'options' => array(
                'center'   => 'Center',
                'right'    => 'Right',
                'left'     => 'Left',

            ),
            'default'  => 'Center',
        ),
    ),

));

CSF::createSection( $prefix, array(
    'parent'      => 'footer',
    'title'       => 'Heading 6',
    'icon'        => 'fab fa-asymmetrik',
    'description' => '<h1>Heading 6</h1>',
    'fields'      => array(

        array(
            'id'      => 'footer-heading-6-color',
            'title'   => 'Footer Heading 6 Color',
            'type'    => 'color',
            'default' => '#fff',
        ),

        array(
            'id'      => 'footer-heading-6-size',
            'title'   => 'Footer Heading 6 Text Size(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-6-line-height',
            'title'   => 'Footer Heading 6 Line Height(px)',
            'type'    => 'text',
            'default' => '25px',
        ),

        array(
            'id'      => 'footer-heading-6-margin',
            'title'   => 'Footer Heading 6 Margin(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-6-padding',
            'title'   => 'Footer Heading 6 Padding(px)',
            'type'    => 'text',
            'default' => '0px 0px 0px 0px',
        ),

        array(
            'id'      => 'footer-heading-3-transfrome',
            'title'   => 'Footer Heading 3 Text Transfrome',
            'type'    => 'select',
            'options' => array(
                'none'        => 'None',
                'capitalize'  => 'Capitalize',
                'uppercase'   => 'Uppercase',
                'inherit'     => 'Inherit'
            ),
            'default' => 'None',
        ),

        array(
            'id'      => 'footer-heading-6-text-align',
            'title'   => 'Footer Heading 6 Text Align',
            'type'    => 'select',
            'options' => array(
                'center'   => 'Center',
                'right'    => 'Right',
                'left'     => 'Left',

            ),
            'default'  => 'Center',
        ),
    ),

));