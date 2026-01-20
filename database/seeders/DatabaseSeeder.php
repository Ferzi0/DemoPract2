<?php

namespace Database\Seeders;

use App\Models\Furniture;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Furniture::create(['title' => 'Табурет', 'price' => '500']);
        Furniture::create(['title' => 'Стул', 'price' => '1500']);
        Furniture::create(['title' => 'Кресло', 'price' => '3000']);
        Furniture::create(['title' => 'Диван', 'price' => '10000']);

        User::create([
            'firstname' => 'Admin',
            'middlename' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@example.com',
            'login' => 'admin',
            'password' => Hash::make('admin2025'),
            'tel' => '+79999999999',
            'role' => 'admin',
        ]);

        User::create([
            'firstname' => 'Иван',
            'middlename' => 'Иванов',
            'lastname' => 'Иванович',
            'email' => 'mail@mail.ru',
            'login' => 'user',
            'password' => Hash::make('user'),
            'tel' => '+71111111111',
            'role' => 'user',
        ]);
    }
}
