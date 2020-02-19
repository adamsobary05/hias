<?php

use Illuminate\Database\Seeder;
use App\User;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@ikanhias.com';
        $user->password = bcrypt('12345678');

        $user->save();
    }
}
