<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@lmux.dev',
            'password' => Hash::make('Ab123456'),
        ]);
        factory(User::class, 10)->create();
    }
}
