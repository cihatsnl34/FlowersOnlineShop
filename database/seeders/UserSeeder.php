<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= [
            'name'=> 'user',
            'email' => 'user2@user.com',
            'password' => bcrypt('12345')
        ];
        User::create($user);
    }
}
