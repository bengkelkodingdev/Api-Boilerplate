<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create roles
        $roles = [
            'superadmin',
            'admin',
            'lecture',
            'assistant',
            'student',
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'api',
            ]);
        }

        $superadmin = Role::findByName('superadmin');
        $admin = Role::findByName('admin');
        $lecture = Role::findByName('lecture');
        $assistant = Role::findByName('assistant');
        $student = Role::findByName('student');

        // Create users
        $superadmin->users()->create([
            'identity_code' => 'SA001',
            'name' => 'Super Admin',
            'email' => 'superadmin@bengkelkoding.id',
            'password' => bcrypt('Superadmin@123'),
        ]);

        $admin->users()->create([
            'identity_code' => 'AD001',
            'name' => 'Admin',
            'email' => 'admin@bengkelkoding.id',
            'password' => bcrypt('Admin@123'),
        ]);

        $lecture->users()->create([
            'identity_code' => 'LC001',
            'name' => 'Lecture',
            'email' => 'lecture@bengkelkoding.id',
            'password' => bcrypt('Lecture@123'),
        ]);

        $assistant->users()->create([
            'identity_code' => 'AS001',
            'name' => 'Assistant',
            'email' => 'assistant@bengkelkoding.id',
            'password' => bcrypt('Assistant@123'),
        ]);

        $student->users()->create([
            'identity_code' => 'ST001',
            'name' => 'Student',
            'email' => 'student@bengkelkoding.id',
            'password' => bcrypt('Student@123'),
        ]);
    }
}
