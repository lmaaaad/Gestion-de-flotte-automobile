<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
             'name'=> 'user imad',
             'email' => 'lolo.loa@domain.com',
             'password' => bcrypt('qwertyuiop'),
             
             'role_id' => '1',
         ]);

         DB::table('users')->insert([
            'name'=> 'kiooo',
            'email' => 'sasae.saqq@domain.com',
            'password' =>  bcrypt('qwertyuiop'),
            
            'role_id' => '1',
        ]);

         DB::table('users')->insert([
            'name'=> 'user.user',
            'email' => 'user.user@domain.com',
            'password' =>  bcrypt('qwertyuiop') ,
            'wilaya_id' => '16',
            'role_id' =>  '2' ,
        ]);

        DB::table('users')->insert([
            'name'=> 'Naib paolo',
            'email' => 'naib.paolo@domain.com',
            'password' =>  bcrypt('qwertyuiop') ,
          
            'role_id' =>'3',
        ]);

         
    }
}
