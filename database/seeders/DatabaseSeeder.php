<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
<<<<<<< HEAD
use Illuminate\Support\Facades\Hash;
=======
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
<<<<<<< HEAD
     * Data demo deterministik. Password demo bersifat lokal (bukan secret produksi).
     */
    public function run(): void
    {
=======
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
<<<<<<< HEAD

        // Akun demo per konteks (Modul 2). Role diformalkan pada Modul 4–5.
        $demo = [
            ['name' => 'Admin Kantin', 'email' => 'admin@kantin.test', 'role' => 'admin'],
            ['name' => 'Operator Tenant', 'email' => 'tenant@kantin.test', 'role' => 'tenant'],
        ];

        foreach ($demo as $row) {
            // forceFill: role/status sengaja tidak mass-assignable; forceFill melewati
            // proteksi fillable dan menghindari asignmen properti bertipe langsung.
            User::firstOrNew(['email' => $row['email']])
                ->forceFill([
                    'name' => $row['name'],
                    'role' => $row['role'],
                    'status' => 'active',
                    'password' => Hash::make('password'),
                    'email_verified_at' => now(),
                ])
                ->save();
        }

        $this->call(DemoCanteenSeeder::class);
=======
>>>>>>> 27c9e432bcd1ad8b785d83f20af17c5912347666
    }
}
