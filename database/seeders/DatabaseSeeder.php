<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Shop Super Admin',
            'email' => 'superadmin@shop.com',
            'password' => Hash::make('superadmin123'), // password => superadmin123
        ]);

        Role::create([
            'name' => 'Super Admin',
            'permission' => serialize([1, 2, 3, 4, 5])
        ]);
        Role::create([
            'name' => 'Admin',
            'permission' => serialize([1, 4, 5])
        ]);
        Role::create([
            'name' => 'Manager',
        ]);
        Role::create([
            'name' => 'Content Editor',
        ]);

        Permission::create([
            'name' => 'USER_CONTROL'
        ]);
        Permission::create([
            'name' => 'ROLE_CONTROL'
        ]);
        Permission::create([
            'name' => 'PERMISSION_CONTROL'
        ]);
        Permission::create([
            'name' => 'PRODUCT_CONTROL'
        ]);
        Permission::create([
            'name' => 'ACTIVITIES_CONTROL'
        ]);

        DB::table('user_roles')->insert(
            ['user_id' => 11, 'role_id' => 1]
        );
        DB::table('user_roles')->insert(
            ['user_id' => 11, 'role_id' => 2]
        );
        DB::table('user_roles')->insert(
            ['user_id' => 11, 'role_id' => 3]
        );
        DB::table('user_roles')->insert(
            ['user_id' => 1, 'role_id' => 4]
        );
        DB::table('user_roles')->insert(
            ['user_id' => 1, 'role_id' => 3]
        );
    }
}
