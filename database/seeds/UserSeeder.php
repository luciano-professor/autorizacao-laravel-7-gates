<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = 'Luciano';
        $user->email = 'luciano@example.com';
        $user->password = Hash::make('123456');
        $user->type = 'administrador';

        $user->save();

        $user = new User();

        $user->name = 'Fulano';
        $user->email = 'fulano@example.com';
        $user->password = Hash::make('123456');
        $user->type = 'normal';

        $user->save();
    }
}
