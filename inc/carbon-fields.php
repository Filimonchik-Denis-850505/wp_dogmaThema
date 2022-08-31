<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options()
{
    Container::make('post_meta', 'Image Slider')
        ->add_fields(array(
            Field::make('complex', 'slider1', 'Slider')
                ->add_fields(array(
                    Field::make('image', 'photo', 'Slider Photo'),
                ))
        ));

    Container::make('post_meta', 'Service Post')
        ->add_fields(array(
            Field::make('complex', 'service_post', 'Slider')
                ->add_fields(array(
                    Field::make('text', 'title', 'Title'),
                    Field::make('image', 'photo', 'Photo'),
                    Field::make('rich_text', 'text', 'Text')
                ))

        ));
};
