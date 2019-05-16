<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ChatPosition extends GraphQLType
{
    protected $attributes = [
        'name' => 'ChatPosition',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'lat' => [
                'type' => Type::string(),
            ],
            'lng' => [
                'type' => Type::string(),
            ]
        ];
    }
}