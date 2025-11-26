<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'view teams',
            'create teams',
            'edit teams',
            'delete teams',
            'view clients',
            'create clients',
            'edit clients',
            'delete clients',
            'view users',
            'create users',
            'edit users',
            'delete users',
            'view testimonials',
            'create testimonials',
            'edit testimonials',
            'delete testimonials',
            'view contacts',
            'delete contacts',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $superadminRole = Role::firstOrCreate(['name' => 'superadmin']);
        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $userRole = Role::firstOrCreate(['name' => 'user']);

        $superadminRole->syncPermissions(Permission::all());
        $adminRole->syncPermissions([
            'view teams',
            'create teams',
            'edit teams',
            'delete teams',
            'view contacts',
            'delete contacts',
            'view testimonials',
            'delete testimonials',
            'view clients',
            'create clients',
            'edit clients',
            'delete clients',
            'view users',
        ]);

        $userRole->syncPermissions([
            'view teams',
            'view testimonials',
            'view contacts',
            'view clients',
            'create clients',
            'edit clients',
            'delete clients',
        ]);

        // 4. Create Super Admin User
        $superadmin = User::firstOrCreate(
            ['email' => 'superadmin@urbanmedia.com.np'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin123'),
            ]
        );
        $superadmin->assignRole('superadmin');
    }
}
