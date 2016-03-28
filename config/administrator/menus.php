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
    'title' => 'Меню',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'menu',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => App\Menu::class,

    /**
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'id',
        'title'=>['title'=>'Название'],
        'sort',
        'active'
    ],

    /**
     * The edit fields array
     *
     * @type array
     */

    'edit_fields' => array(


        'title'=>array(
            'title'=>'Название',
            'type'=>'text'
        ),
        'slug'=>array(
            'name'=>'URL',
            'type'=>'text'
        ),
        'active' => array(
            'title' => 'Активен',
            'type' => 'bool'
        ),
        'sort' => array(
            'title' => 'Порядок',
            'type' => 'number'
        ),
    ),

    'filters'=>[
        'active' =>[
            'type' => 'bool'
        ],
        'title' => [
            'type' => 'text'
        ],
    ],
];