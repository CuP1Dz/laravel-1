<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name'=>'admin',
                    'middlename'=>'admin',
                    'lastname'=>'admin',
                    'school'=>'admin',
                    'class'=>'admin',
                    'email'=>'admin@admin.com',
                    'password'=>Hash::make('administrator'),
                ],
                [
                    'name'=>'Иван',
                    'middlename'=>'Иванов',
                    'lastname'=>'Иванович',
                    'school'=>'МБОУ СОШ №54',
                    'class'=>'11-Г',
                    'email'=>'qweasdzxc@qweasdzxc.com',
                    'password'=>Hash::make('qweasdzxc'),
                ]
            ]
        );
    }
}
