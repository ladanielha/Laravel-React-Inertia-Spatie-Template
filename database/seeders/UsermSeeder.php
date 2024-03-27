<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class UsermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $admin = User::create([
            'name' => 'adminseed',
            'email'=> 'adminseed@gmail.com',
            'password' => 'password',
        ]);
        $admin->assignRole('superadmin');
        $manager = User::create([
            'name' => 'managerseed',
            'email'=> 'managerseed@gmail.com',
            'password' => 'password',
        ]);
        $manager->assignRole('manager');
        $employee = User::create([
            'name' => 'employeeseed',
            'email'=> 'employeeseed@gmail.com',
            'password' => 'password',
        ]);
        $employee->assignRole('employee');
    }
}
