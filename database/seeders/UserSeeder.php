<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superadmin = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'suadmin@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $staff1 = User::factory()->create([
            'name' => 'Staff1',
            'email' => 'staff1@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $staff2 = User::factory()->create([
            'name' => 'Staff2',
            'email' => 'staff2@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $staff3 = User::factory()->create([
            'name' => 'Staff3',
            'email' => 'staff3@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);

        $client = User::factory()->create([
            'name' => 'Client',
            'email' => 'client@csc.net.my',
            'password' => Hash::make('Csc@123'),
        ]);
    }
}
