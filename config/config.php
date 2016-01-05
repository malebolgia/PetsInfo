<?php

return [
/**
* Provider .
*/
'provider'  => 'petfinder',

/**
* Package .
*/
'package'   => 'pet',

/**
* Modules .
*/
'modules'   => [
'pet',
'petimage',],


'pet' => [
                    'Name'          => 'Pet',
                    'name'          => 'pet',
                    'table'         => 'pets',
                    'model'         => 'Petfinder\Pet\Models\Pet',
                    'permissions'   => ['admin'     => ['view', 'create', 'edit', 'delete']], 
                    'image'         =>
                        [
                        'xs'        => ['width' =>'60',     'height' =>'45'],
                        'sm'        => ['width' =>'100',    'height' =>'75'],
                        'md'        => ['width' =>'460',    'height' =>'345'],
                        'lg'        => ['width' =>'800',    'height' =>'600'],
                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                        ],

                    'fillable'          =>  ['user_id', 'name_of_pet',            'user_id',            'perfecture_id',            'reward_id',            'lost_date',            'color_of_pet',            'age_of_pet',            'character',            'characteristics',            'status',            'map_lat',            'map_lang',            'other_amount',],
                    'listfields'        =>  ['id', 'name_of_pet',            'user_id',            'perfecture_id',            'reward_id',            'lost_date',            'color_of_pet',            'age_of_pet',            'character',            'characteristics',            'status',            'map_lat',            'map_lang',            'other_amount',],
                    'translatable'      =>  ['name_of_pet',            'user_id',            'perfecture_id',            'reward_id',            'lost_date',            'color_of_pet',            'age_of_pet',            'character',            'characteristics',            'status',            'map_lat',            'map_lang',            'other_amount',],

                    'upload-folder'     =>  '/uploads/pet/pet',
                    'uploadable'        =>  [
                                                'single' => [],
                                                'multiple' => []
                                            ],
                ],

'petimage' => [
                    'Name'          => 'Petimage',
                    'name'          => 'petimage',
                    'table'         => 'petimages',
                    'model'         => 'Petfinder\Pet\Models\Petimage',
                    'permissions'   => ['admin'     => ['view', 'create', 'edit', 'delete']], 
                    'image'         =>
                        [
                        'xs'        => ['width' =>'60',     'height' =>'45'],
                        'sm'        => ['width' =>'100',    'height' =>'75'],
                        'md'        => ['width' =>'460',    'height' =>'345'],
                        'lg'        => ['width' =>'800',    'height' =>'600'],
                        'xl'        => ['width' =>'1000',   'height' =>'750'],
                        ],

                    'fillable'          =>  ['user_id', 'pet_id',            'title',            'image_path',            'mainpic',],
                    'listfields'        =>  ['id', 'pet_id',            'title',            'image_path',            'mainpic',],
                    'translatable'      =>  ['pet_id',            'title',            'image_path',            'mainpic',],

                    'upload-folder'     =>  '/uploads/pet/petimage',
                    'uploadable'        =>  [
                                                'single' => [],
                                                'multiple' => []
                                            ],
                ],


];
