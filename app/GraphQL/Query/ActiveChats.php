<?php

namespace App\GraphQL\Query;

use GraphQL\GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;

class ActiveChats extends Query
{
    protected $attributes = [
        'name' => 'ActiveChats',
        'description' => 'A query'
    ];

    public function type()
    {
        return Type::listOf(\GraphQL::type('Chat'));
    }

    public function args()
    {
        return [

        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        return [
            [
                'id' => 1,
                'position' => [
                    'lat' => '46.185183059831004',
                    'lng' => '21.315251660998914'
                ]
            ],
            [
                'id' => 2,
                'position' => [
                    'lat' => '46.2307849576877',
                    'lng' => '21.267476007342342',
                ]
            ],
            [
                'id' => 3,
                'position' => [
                    'lat' => '46.19551740648851',
                    'lng' => '21.28257751464844',
                ]
            ]
        ];
    }
}