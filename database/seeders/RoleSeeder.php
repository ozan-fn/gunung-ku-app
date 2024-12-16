<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus cache yang mungkin ada
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Buat roles jika belum ada
        if (Role::where('name', 'superadmin')->doesntExist()) {
            Role::create(['name' => 'superadmin']);
        }

        if (Role::where('name', 'admin')->doesntExist()) {
            Role::create(['name' => 'admin']);
        }

        if (Role::where('name', 'user')->doesntExist()) {
            Role::create(['name' => 'user']);
        }

        // Assign role superadmin ke user dengan ID 1
        $user = User::where('email', 'ozan6825@gmail.com')->first();
        if ($user) {
            $user->assignRole('superadmin');
        }
    }
}
