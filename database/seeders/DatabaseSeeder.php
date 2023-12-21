<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     * 
     * 
     * 
     */

    public function run()
    {
        $this->generateRoles();
        $this->generateUsers();
    }

    private function generateRoles()
    {
        Role::customCreate('Admin');
        Role::customCreate('Bendahara');
        Role::customCreate('User');
    }

    private function generateUsers()
    {
        User::customCreate(1, 'admin', bcrypt('admin12345'), 'admin@gmail.com', '000', '000');
        User::customCreate(2, 'bendahara', bcrypt('admin12345'), 'bendahara@gmail.com', '000', '000');
        User::customCreate(3, 'content_creator', bcrypt('admin12345'), 'user@gmail.com', '000', '000');
    }
}
