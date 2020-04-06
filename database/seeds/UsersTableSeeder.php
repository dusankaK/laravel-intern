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
        User::create([
            'first_name' => 'Dusanka',
            'last_name' => 'Karac',
            'email' => 'du@gmail.com',
            'company' => 'Mority',
            'country' => 'Serbia',
            'password' => bcrypt('duda')
        ]);
        factory(App\User::class, 20)->create();
    }
}
