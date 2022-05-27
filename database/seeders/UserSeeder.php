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
             'name'=> 'Boukedjani imad',
             'email' => 'imad.boukedjani@poste.dz',
             'password' => bcrypt('qwertyuiop'),
             
             'role_id' => '1',
         ]);

         DB::table('users')->insert([
            'name'=> 'Mahioufe fouzi',
            'email' => 'mahioufe.fouzi@poste.dz',
            'password' =>  bcrypt('qwertyuiop'),
            
            'role_id' => '1',
        ]);

         DB::table('users')->insert([
            'name'=> 'Touati.houda',
            'email' => 'Touati.houda@poste.dz',
            'password' =>  bcrypt('qwertyuiop') ,
            'wilaya_id' => '16',
            'role_id' =>  '2' ,
        ]);

        DB::table('users')->insert([
            'name'=> 'Naib Rabah',
            'email' => 'naib.rabah@poste.dz',
            'password' =>  bcrypt('qwertyuiop') ,
          
            'role_id' =>'3',
        ]);

         
    }
}
