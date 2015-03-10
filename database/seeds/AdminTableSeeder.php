<?php 
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder {
	public function run()
	{
		\DB::table('users')->insert(array(
			'first_name'	=> 'Noel',
			'last_name'		=>	'Huillca',
			'email'	=>	'noel.logan@gmail.com',
			'password' => \Hash::make('123'),
			'type'	=>	'admin'
		));
        \DB::table('user_profiles')->insert(array(
            'user_id'=>1,
            'birthdate'	=>	'1987/04/21',
        ));
	}
}
