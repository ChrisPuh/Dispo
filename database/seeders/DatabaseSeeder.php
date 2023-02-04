<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @return void
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'first_name' => 'chris',
            'last_name' => 'ganzert',
            'email' => 'chrisganzert@icloud.com',
            'password' => \Hash::make('Lucas2011')
        ]);
    }
}
