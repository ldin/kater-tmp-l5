<?php
/**
 * Created by PhpStorm.
 * User: ldinka
 * Date: 3/27/16
 * Time: 10:52 PM
 */

return[
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Объекты',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'объект',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => App\Item::class,

    /**
     * The width of the model's edit form
     *
     * @type int
     */
    'form_width' => 900,

    /**
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'id',
        'name' => ['title' => 'Название*'],
        'status' => ['title' => 'Активен'],
    ],

    /**
     * The edit fields array
     *
     * @type array
     */

    'edit_fields' => array(
        'name' => array(
            'title' => 'Название*',
            'type' => 'text'
        ),
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'slug' => array(
            'title' => 'URL*',
            'type' => 'text',
            'description' => 'URL должно содержать только латинские символы, цифры, знаки подчёркивания (_) и дефисы (-).'
        ),
        'category' => array(
            'title' => 'Категория',
            'type' => 'relationship',
        ),
        'status' => array(
            'title' => 'Активен',
            'type' => 'bool'
        ),
        'order' => array(
            'title' => 'Порядок вывода',
            'type' => 'number',
            'value' => 0
        ),
        'properties' => array(
            'title' => 'Характеристики',
            'type'=>'relationship'

        ),
        'text'=>array(
            'title'=>'Текст',
            'type'=>'wysiwyg'
        ),
        'allImages' =>array(
            'title' => 'Изображения',
            'relationship' => 'user',
        ),

//        'allImages' =>array(
//            'title' => 'Изображения',
//            'type' => 'image',
//            'location' => public_path() . '/uploads/items/originals/',
//            'naming' => 'keep',
//            'length' => 20,
//            'size_limit' => 2,
//            'sizes' => array(
//                array(65, 57, 'crop', public_path() . '/uploads/items/thumbs/small/', 100),
//                array(220, 138, 'landscape', public_path() . '/uploads/items/thumbs/medium/', 100),
//                array(383, 276, 'fit', public_path() . '/uploads/items/thumbs/full/', 100)
//            ),
//            'output' => '<img src="/uploads/items/thumbs/small/(:value)" height="100" />',
//        ),
    ),

    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'name' => 'required',
        'slug' => 'required|alpha_dash|min:3',
        'order' => 'numeric'
    ),

    /**
     * The validation messages for the form, based on the Laravel validation class
     *
     * @type array
     */
    'messages' => array(
        'name.required' => 'Название обязательно для заполненя',
        'slug.required' => 'URL обязательно для заполненя',
        'slug.alpha_dash' => 'URL должно содержать только латинские символы, цифры, знаки подчёркивания (_) и дефисы (-).',
        'slug.min:3' => 'URL должно содержать не меньше 3 символов',
    ),
];

