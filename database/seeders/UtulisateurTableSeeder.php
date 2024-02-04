<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UtulisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //creation des role
        $admin=Role::create([
            'name'=>'admin'
        ]);
      $client=Role::create([
        'name'=>'clients'
      ]);

    //   create defaulte user administrateur
    $user_admin=User::create([
          'telephone'=>'624378757',
          'prenom'=>'Mamadou saliou',
          'nom'=>'Balde',
          'email'=>'msblarya621@gmail.com',
          'pseudo'=>'MSB',
          'avatar'=>'avatar',
          'couverture'=>'couverture',
          'status'=>'Dev',
          'biographie'=>'ingenieur de profession très doué dans l\'ingenerie',
          'password'=>bcrypt('224')

    ]);
    $user_client=User::create([
          'telephone'=>'621809701',
          'prenom'=>'Mamadou',
          'nom'=>'Balde',
          'email'=>'msb224@gmail.com',
          'pseudo'=>'SMB',
          'avatar'=>'avatar',
          'couverture'=>'couverture',
          'status'=>'Dev',
          'biographie'=>'ingenieur de profession très doué dans l\'ingenerie',
          'password'=>bcrypt('224')

    ]);
    // attachement des roles au different user after this creation

    $user_admin->addRole($admin);
    $user_client->addRole($client);

    }
}
