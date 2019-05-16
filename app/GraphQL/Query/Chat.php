<?php

namespace App\GraphQL\Query;

use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\SelectFields;
use Rebing\GraphQL\Support\Query;

class Chat extends Query
{
    protected $attributes = [
        'name' => 'Chat',
        'description' => 'A query'
    ];

    public function type()
    {
        return \GraphQL::type('Chat');
    }

    public function args()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int())
            ]
        ];
    }

    public function resolve($root, $args, SelectFields $fields, ResolveInfo $info)
    {
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        switch($args['id']) {
            case 1:
                $pos = [
                    'lat' => '46.185183059831004',
                    'lng' => '21.315251660998914'
                ];
                break;
            case 2:
                $pos = [
                    'lat' => '46.2307849576877',
                    'lng' => '21.267476007342342',
                ];
                break;
            case 3:
                $pos = [
                    'lat' => '46.19551740648851',
                    'lng' => '21.28257751464844',
                ];
                break;
        }
        return [
            'id' => $args['id'],
            'position' => $pos
        ];
    }
}