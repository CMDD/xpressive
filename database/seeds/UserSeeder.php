<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::create([
        'name' => 'jhon',
        'password' => bcrypt('qwe123'),
        'email' => 'jhon54plex@gmail.com'
      ]);
    }
}
