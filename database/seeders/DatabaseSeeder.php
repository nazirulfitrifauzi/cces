<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            DashboardTableSeeder::class,
            UserSeeder::class,
            LaratrustSeeder::class,
        ]);

        // give user 'suadmin' -> superadministrator role
        $suadminUser = User::find(1);
        $suadminRole = Role::find(1);
        $suadminUser->attachRole($suadminRole);

        // give user 'admin' -> administrator role
        $adminUser = User::find(2);
        $adminRole = Role::find(2);
        $adminUser->attachRole($adminRole);

        // give user 'staff' -> staff role
        $staffRole = Role::find(3);

        $staff1User = User::find(3);
        $staff1User->attachRole($staffRole);

        $staff2User = User::find(4);
        $staff2User->attachRole($staffRole);

        $staff3User = User::find(5);
        $staff3User->attachRole($staffRole);

        // give user 'client' -> client role
        $clientUser = User::find(6);
        $clientRole = Role::find(4);
        $clientUser->attachRole($clientRole);
    }
}
