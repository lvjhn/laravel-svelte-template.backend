<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->createAdminUser(); 
    }

    public function createAdminUser() {
        User::create([
            "username" => "admin", 
            "email" => "admin@example.com", 
            "password" => Hash::make("p@$\$w0rd")
        ]);
    }
}
