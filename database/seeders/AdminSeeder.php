<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Niveau;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Creation des differents Niveaux

        Niveau::create([
            'libelle' => 'Niveau 1',
        ]);

        Niveau::create([
            'libelle' => 'Niveau 2',
        ]);

        Niveau::create([
            'libelle' => 'Niveau 3',
        ]);

        $role = Role::create(['name'=> 'Super@Administrateur']);
    
        Role::create(['name'=> 'Administrateur']);
        Role::create(['name'=> 'participant']);

        Permission::create(['name' => 'restaurant']);
        Permission::create(['name' => 'comite nuit']);
        Permission::create(['name' => 'hackaton']);


        $user = User::create([
            'name' => 'Administrateur',
            'email' => 'adminHackaton@C2E.com',
            'password' => Hash::make("@Hackaton@2k22@")
        ]);

        
        
        $user->assignRole('Super@Administrateur') ;


        
    }
}
