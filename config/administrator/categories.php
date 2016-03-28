<?php
/**
 * Created by PhpStorm.
 * User: ldinka
 * Date: 3/27/16
 * Time: 10:08 PM
 */

return[
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Категории',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'Катекгория',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => App\Category::class,

    /**
     * The width of the model's edit form
     *
     * @type int
     */
    'form_width' => 500,

    /**
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'id',
        'name' => ['title' => 'Название*'],
        'order' => ['title' => 'Порядок вывода'],
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
        'status' => array(
            'title' => 'Активен',
            'type' => 'bool'
        ),
        'order' => array(
            'title' => 'Порядок вывода',
            'type' => 'number',
            'value' => 0
        ),
        'text'=>array(
            'title'=>'Текст',
            'type'=>'wysiwyg'
        ),
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