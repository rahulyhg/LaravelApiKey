<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::create(array(
            'name' => 'tony',
            'username' => 'tony_admin',
			'password' => Hash::make('admin'),
            'email' => 'tony_admin@lavarel.com',
            'api_token' => '37b51d194a7513e45b56f6524f2d51f2'
        ));

    }
}
