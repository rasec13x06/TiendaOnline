<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
        	[
        		'name'      => 'Cesar',
        		'lastname'  => 'Castillo',
        		'email'     => 'rasec13x06@gmail.com',
        		'user'      => 'rasec13x06',
        		'password'  => \Hash::make('c151003'),
        		'type'      => 'admin',
        		'active'    => 1,
        		'address'   => 'Maracaibo, Edo. Zulia',
        		'created_at'=> new DateTime,
        		'Updated_at'=> new DateTime
        	],
        	[
        		'name'      => 'Reinaira',
        		'lastname'  => 'Parra',
        		'email'     => 'reinajparrac@gmail.com',
        		'user'      => 'reinap',
        		'password'  => \Hash::make('c151003'),
        		'type'      => 'user',
        		'active'    => 1,
        		'address'   => 'Maracaibo, Edo. Zulia',
        		'created_at'=> new DateTime,
        		'Updated_at'=> new DateTime
        	],
        );

        User::insert($data);
    }
}
