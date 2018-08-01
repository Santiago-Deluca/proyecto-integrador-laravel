<?php

use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // User::create([
      //     'name'=>'Guillermo',
      //     'username' => 'Guille',
      //     'email' => 'guille@gmail.com',
      //     'password' => password_hash('guillecapo', PASSWORD_DEFAULT),
      //   ]);
        $users = factory(App\User::class, 50)->create();
      }

}
