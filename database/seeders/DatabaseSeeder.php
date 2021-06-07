<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        User::create([
            'name' => 'Shane Poppleton',
            'email' => 'shane@alphasg.com.au',
            'password' => bcrypt('secret'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        $this->call(MenuSeeder::class);
        Customer::factory()->count(30)->create();
    }
}
