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
        $roles = ['superadmin', 'admin', 'user'];

        foreach ($roles as $role) {
            if (Role::where('name', $role)->doesntExist()) {
                Role::create(['name' => $role]);
            }
        }

        // Daftar pengguna yang ingin dibuat
        $users = [
            ['name' => 'ozan', 'email' => 'ozan6825@gmail.com', 'password' => 'Akhmad6825', 'role' => 'superadmin'],
            ['name' => 'gilang', 'email' => 'gilang@gmail.com', 'password' => 'gilang12', 'role' => 'admin'],
            ['name' => 'astha', 'email' => 'astha@gmail.com', 'password' => 'astha123', 'role' => 'user'],
        ];

        foreach ($users as $userData) {
            // Buat atau perbarui pengguna
            $user = User::updateOrCreate(
                ['email' => $userData['email']], // Kondisi untuk mencocokkan
                [
                    'name' => $userData['name'],
                    'password' => bcrypt($userData['password']),
                ] // Data yang akan diperbarui atau dibuat baru
            );

            // Assign role ke pengguna
            $user->assignRole($userData['role']);
        }
    }
}
