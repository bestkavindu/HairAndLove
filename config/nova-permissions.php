<?php

return [
    /*
    |--------------------------------------------------------------------------
    | User model class
    |--------------------------------------------------------------------------
    */

    'user_model' => 'App\Models\User',

    /*
    |--------------------------------------------------------------------------
    | Nova User resource tool class
    |--------------------------------------------------------------------------
    */

    'user_resource' => 'App\Nova\User',

    /*
    |--------------------------------------------------------------------------
    | The group associated with the resource
    |--------------------------------------------------------------------------
    */

    'role_resource_group' => 'Other',

    /*
    |--------------------------------------------------------------------------
    | Database table names
    |--------------------------------------------------------------------------
    | When using the "HasRoles" trait from this package, we need to know which
    | table should be used to retrieve your roles. We have chosen a basic
    | default value but you may easily change it to any table you like.
    */

    'table_names' => [
        'roles' => 'roles',

        'role_permission' => 'role_permission',

        'role_user' => 'role_user',

        'users' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Application Permissions
    |--------------------------------------------------------------------------
    */

    'permissions' => [
        'view users' => [
            'display_name' => 'View users',
            'description'  => 'Can view users',
            'group'        => 'User',
        ],

        'create users' => [
            'display_name' => 'Create users',
            'description'  => 'Can create users',
            'group'        => 'User',
        ],

        'edit users' => [
            'display_name' => 'Edit users',
            'description'  => 'Can edit users',
            'group'        => 'User',
        ],

        'delete users' => [
            'display_name' => 'Delete users',
            'description'  => 'Can delete users',
            'group'        => 'User',
        ],

        'view roles' => [
            'display_name' => 'View roles',
            'description'  => 'Can view roles',
            'group'        => 'Role',
        ],

        'create roles' => [
            'display_name' => 'Create roles',
            'description'  => 'Can create roles',
            'group'        => 'Role',
        ],

        'edit roles' => [
            'display_name' => 'Edit roles',
            'description'  => 'Can edit roles',
            'group'        => 'Role',
        ],

        'delete roles' => [
            'display_name' => 'Delete roles',
            'description'  => 'Can delete roles',
            'group'        => 'Role',
        ],
        // products
        'view products' => [
            'display_name' => 'View products',
            'description'  => 'Can view products',
            'group'        => 'Product',
        ],

        'create products' => [
            'display_name' => 'Create products',
            'description'  => 'Can create products',
            'group'        => 'Product',
        ],

        'edit products' => [
            'display_name' => 'Edit products',
            'description'  => 'Can edit products',
            'group'        => 'Product',
        ],

        'delete products' => [
            'display_name' => 'Delete products',
            'description'  => 'Can delete products',
            'group'        => 'Product',
        ],
        // blognews
        'view blognews' => [
            'display_name' => 'View blognews',
            'description'  => 'Can view blognews',
            'group'        => 'Blog and News',
        ],

        'create blognews' => [
            'display_name' => 'Create blognews',
            'description'  => 'Can create blognews',
            'group'        => 'Blog and News',
        ],

        'edit blognews' => [
            'display_name' => 'Edit blognews',
            'description'  => 'Can edit blognews',
            'group'        => 'Blog and News',
        ],

        'delete blognews' => [
            'display_name' => 'Delete blognews',
            'description'  => 'Can delete blognews',
            'group'        => 'Blog and News',
        ],
         // HOMEPAGE
         'view homepage' => [
            'display_name' => 'View homepage',
            'description'  => 'Can view homepage',
            'group'        => 'Home Page',
        ],

        'create homepage' => [
            'display_name' => 'Create homepage',
            'description'  => 'Can create homepage',
            'group'        => 'Home Page',
        ],

        'edit homepage' => [
            'display_name' => 'Edit homepage',
            'description'  => 'Can edit homepage',
            'group'        => 'Home Page',
        ],

        'delete homepage' => [
            'display_name' => 'Delete homepage',
            'description'  => 'Can delete homepage',
            'group'        => 'Home Page',
        ],
        // aboutpage
        'view aboutpage' => [
            'display_name' => 'View aboutpage',
            'description'  => 'Can view aboutpage',
            'group'        => 'About Page',
        ],

        'create aboutpage' => [
            'display_name' => 'Create aboutpage',
            'description'  => 'Can create aboutpage',
            'group'        => 'About Page',
        ],

        'edit aboutpage' => [
            'display_name' => 'Edit aboutpage',
            'description'  => 'Can edit aboutpage',
            'group'        => 'About Page',
        ],

        'delete aboutpage' => [
            'display_name' => 'Delete aboutpage',
            'description'  => 'Can delete aboutpage',
            'group'        => 'About Page',
        ],
        // servicepage
        'view servicepage' => [
            'display_name' => 'View servicepage',
            'description'  => 'Can view servicepage',
            'group'        => 'Service Page',
        ],

        'create servicepage' => [
            'display_name' => 'Create servicepage',
            'description'  => 'Can create servicepage',
            'group'        => 'Service Page',
        ],

        'edit servicepage' => [
            'display_name' => 'Edit servicepage',
            'description'  => 'Can edit servicepage',
            'group'        => 'Service Page',
        ],

        'delete servicepage' => [
            'display_name' => 'Delete servicepage',
            'description'  => 'Can delete servicepage',
            'group'        => 'Service Page',
        ],
        // blognewspage
        'view blognewspage' => [
            'display_name' => 'View blognewspage',
            'description'  => 'Can view blognewspage',
            'group'        => 'Blog and News Page',
        ],

        'create blognewspage' => [
            'display_name' => 'Create blognewspage',
            'description'  => 'Can create blognewspage',
            'group'        => 'Blog and News Page',
        ],

        'edit blognewspage' => [
            'display_name' => 'Edit blognewspage',
            'description'  => 'Can edit blognewspage',
            'group'        => 'Blog and News Page',
        ],

        'delete blognewspage' => [
            'display_name' => 'Delete blognewspage',
            'description'  => 'Can delete blognewspage',
            'group'        => 'Blog and News Page',
        ],
        // contactpage
        'view contactpage' => [
            'display_name' => 'View contactpage',
            'description'  => 'Can view contactpage',
            'group'        => 'Contact Page',
        ],

        'create contactpage' => [
            'display_name' => 'Create contactpage',
            'description'  => 'Can create contactpage',
            'group'        => 'Contact Page',
        ],

        'edit contactpage' => [
            'display_name' => 'Edit contactpage',
            'description'  => 'Can edit contactpage',
            'group'        => 'Contact Page',
        ],

        'delete contactpage' => [
            'display_name' => 'Delete contactpage',
            'description'  => 'Can delete contactpage',
            'group'        => 'Contact Page',
        ],
        // genaralinfo
        'view genaralinfo' => [
            'display_name' => 'View genaralinfo',
            'description'  => 'Can view genaralinfo',
            'group'        => 'Genaralinfo',
        ],

        'create genaralinfo' => [
            'display_name' => 'Create genaralinfo',
            'description'  => 'Can create genaralinfo',
            'group'        => 'Genaralinfo',
        ],

        'edit genaralinfo' => [
            'display_name' => 'Edit genaralinfo',
            'description'  => 'Can edit genaralinfo',
            'group'        => 'Genaralinfo',
        ],

        'delete genaralinfo' => [
            'display_name' => 'Delete genaralinfo',
            'description'  => 'Can delete genaralinfo',
            'group'        => 'Genaralinfo',
        ],
    ],
];
