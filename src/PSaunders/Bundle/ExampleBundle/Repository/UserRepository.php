<?php

namespace PSaunders\Bundle\ExampleBundle\Repository;

class UserRepository
{
    /**
     * Find all users
     * 
     * @return array
     */
    public function find()
    {
        return [
            '0' => [
                'id' => 1,
                'name' => 'Paul Saunders'
            ],
            '1' => [
                'id' => 2,
                'name' => 'John Smith'
            ],
            '2' => [
                'id' => 3,
                'name' => 'Jane Doe'
            ]
        ];
    }
}