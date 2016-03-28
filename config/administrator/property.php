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
    'title' => 'Характеристики объектов',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'характерисика',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => App\Property::class,

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
        'name' => ['title' => 'Название'],
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

    ),

    /**
     * The validation rules for the form, based on the Laravel validation class
     *
     * @type array
     */
    'rules' => array(
        'name' => 'required',
    ),

    /**
     * The validation messages for the form, based on the Laravel validation class
     *
     * @type array
     */
    'messages' => array(
        'name.required' => 'Название обязательно для заполненя',
    ),
];