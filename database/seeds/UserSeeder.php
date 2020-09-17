<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    
    public function run()
    {
        User::query()->truncate();

        User::insert([
            ['id' => 1, 'name' => 'Đặng Quang Hà', 'email' => 'quangha@gmail.com', 'password' => Hash::make('12345678')],
            ['id' => 2, 'name' => 'Vũ Đức Huy', 'email' => 'duchuy@gmail.com', 'password' => Hash::make('12345678')],
            ['id' => 3, 'name' => 'Lại Tiến Đức', 'email' => 'tienduc@gmail.com', 'password' => Hash::make('12345678')],
        ]);
    }
}
