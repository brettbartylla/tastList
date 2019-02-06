<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
=======
        //create users and articles
        factory(App\User::class, 10)->create();
        factory(App\Post::class, 1000)->create();

        
>>>>>>> 5a0f013d30806c41d9024a4f9c6713f6aea3eff6
    }
}
