<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'name'=>'Admin',
               'email'=>'satishkilariadmin@hotmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('WelcomE@12022'),
            ],
            [
               'name'=>'Regular User',
               'email'=>'user@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('WelcomE@12022'),
            ],
        ];
  
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
    
}
