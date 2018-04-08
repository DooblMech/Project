<?php

return [
[
    'Key1'=>'Personal data',
    'destination' => 'personal',
    'data'=>[
        'label'=>'personal data',
        'type'=>'name',
        'data'=>'Stukalo Anton'
    ]


],
    [
    'Key1'=>'Contacts',
        'destination' => 'contacts',
    'data'=>[
       [ 'label'=>'Phone',
        'type'=>'phone',
        'data'=>'+380637445776'
    ],
    [
        'label'=>'E-mail',
        'type'=>'mail',
        'data'=>'wrugleys@yandex.ru'
    ],
    [
        'label'=>'telegram',
        'type'=>'telega',
        'data'=>'@wrugleys'
    ]
        ]
    ],
    [
        'key1'=>'Objective',
        'destination' => 'object',
        'data'=>[
            'type'=>'text',
            'data'=>'study in KPI fot 4 year and get bacalavr degree'
        ]
    ],
    [
        'key1'=>'Summary',
        'destination' => 'summ',
        'data'=>[
            'type'=>'phone',
            'data'=>
            'Starting learn PHP, JS, CSS, HTML, AJAX, Jquvery'
        ]
    ],
     [
         'key1'=>'Skills',
         'destination' => 'skills',
         'data'=>[
             [
                 'type'=>'skill',
                 'label'=>'Languages',
                 'data'=>[ 'PHP', 'JS']

                 ],
             [
                 'type'=>'skill',
                 'label'=>'Frontend',
                 'data'=>[ 'CSS', 'HTML']
             ],
             [
                 'type'=>'skill',
                 'label'=>'OS',
                 'data'=>[ 'Windows']
             ],
             [
                 'type'=>'skill',
                 'label'=>'Frameworks',
                 'data'=>[ 'Jqvery', 'Yii 2']
             ]


         ]
     ],
    [
        'key1'=>'Experience',
        'destination' => 'exp',
    'data' => [

            'type' => 'list',
            'period' => 'August 2016 - December 2016',
            'company' => 'Kyivstar',
            'position' => 'CallCentre',
            'role' => 'Consultant',

        ]
        ],
        [
            'key1'=> 'Education',
            'destination' => 'education',
            'data'=>
                [
                    'type' => 'list',
                    'period' => '2014 - 2018',
                    'institution' => 'NTUU KPI',
                    'specialty' => 'Integriren technologis machinenbaum'
                ],
                [
                    'type' => 'list',
                    'period' => 'February 2018 - May 2018',
                    'institution' => 'Brain Academy',
                    'specialty' => 'PHP developer'
                ]
            ],
    [
        'key1' => 'Additional information',
        'destination' => 'other',
        'data' => [
            [
                'type' => 'skill',
                'label' => 'Languages',
                'data' => [
                    'English', 'Germany'
                ]
            ]
             ]
    ]

    ];