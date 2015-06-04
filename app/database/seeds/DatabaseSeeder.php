<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        Eloquent::unguard();

        Member::create([
            'email' => 'admin@admin.com',
            'password' => Hash::make('123'),
        ]);

		// $this->call('UserTableSeeder');
	}

}
