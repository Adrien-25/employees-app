<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(1)->create();
        // $role = Role::create(['name' => 'admin']);

        // $user = User::factory()->create([
        //     'first_name' => 'Admin',
        //     'email' => 'admin@example.com',
        // ]);
        // $user->assignRole($role);


        // ============================


        // $user = User::factory()->create([
        //     'first_name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => 'adminadmin',
        // ]);
        
        // $role = Role::findByName('admin', 'web');
        
        // if ($role) {
        //     $user->assignRole($role);
        // } else {

        // }
    }
}
