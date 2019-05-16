<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class Chat extends GraphQLType
{
    protected $attributes = [
        'name' => 'Chat',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::int()
            ],
            'position' => [
                'type' => \GraphQL::type('ChatPosition')
            ]
        ];
    }
}