<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 20)->create();

        App\User::create(
            ['first_name' => 'Ivan',
             'last_name' => 'Vinkesevic', 
             'email' => 'ivan@gmail.com', 
             'password' => bcrypt('ivan12345'),
            ]);
    }
}
