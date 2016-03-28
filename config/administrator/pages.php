<?php
/**
 * Created by PhpStorm.
 * User: ldinka
 * Date: 3/25/16
 * Time: 10:53 PM
 */

return[
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Страницы',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'page',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => App\Post::class,

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
        'name',
        'status'
    ],

    /**
     * The edit fields array
     *
     * @type array
     */

    'edit_fields' => array(
        'name' => array(
            'title' => 'Name',
            'type' => 'text'
        ),
        'title' => array(
            'title' => 'Title',
            'type' => 'text'
        ),
        'text'=>array(
            'title'=>'Text',
            'type'=>'wysiwyg'
        )
    ),
];