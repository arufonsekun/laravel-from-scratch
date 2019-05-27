<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //remove all the records
        DB::table('users')->delete();

        //creates root user
        App\User::create([
            'name' => 'Root da Silva',
            'username' => 'root',
            'email' => 'root@root.com',
            'password' => bcrypt('roote')
        ]);
        // $this->call(UsersTableSeeder::class);
        // $this->call('UsersTableSeeder');
    }
}
