<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = $this->userData();
        foreach ($users as $user){

        }
    }

    public function userData(): array
    {
        return [
          [
              'name' => 'User 01',
              'email' => 'user01@mailinator.com'
          ],
            [
                'name' => 'User 02',
                'email' => 'user02@mailinator.com'
            ]
        ];
    }
}
