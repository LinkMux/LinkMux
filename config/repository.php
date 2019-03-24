<?php
return [
    'generator' => [
        'basePath'      => app()->path(),
        'rootNamespace' => 'App\\',
        'paths'         => [
            'models'       => 'Models',
            'repositories' => 'Repositories',
            'interfaces'   => 'Repositories',
            'transformers' => 'Transformers',
            'presenters'   => 'Presenters',
            'validators'   => 'Validators',
            'controllers'  => 'Http/Controllers',
            'provider'     => 'RepositoryServiceProvider',
            'criteria'     => 'Criteria',
        ],
    ],
];
