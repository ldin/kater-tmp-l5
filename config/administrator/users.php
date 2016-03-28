<?php

return[
    /**
     * Model title
     *
     * @type string
     */
    'title' => 'Users',

    /**
     * The singular name of your model
     *
     * @type string
     */
    'single' => 'user',

    /**
     * The class name of the Eloquent model that this config represents
     *
     * @type string
     */
    'model' => App\User::class,

    /**
     * The columns array
     *
     * @type array
     */
    'columns' => [
        'id',
        'name',
        'email'
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
        'email' => array(
            'title' => 'Product',
            'type' => 'text'
        ),
    ),
];