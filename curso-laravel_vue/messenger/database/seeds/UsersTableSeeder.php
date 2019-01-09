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
        'name'=> 'Arturo',
        'email'=> 'rrr@gmail.com',
        'password'=> bcrypt('123')
      ]);

      User::create([
        'name'=> 'Juan',
        'email'=> 'juan@gmail.com',
        'password'=> bcrypt('123')
      ]);

      User::create([
        'name'=> 'Alberto',
        'email'=> 'alberto@gmail.com',
        'password'=> bcrypt('123')
      ]);
    }
}
