<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new \App\Roles();
        $role -> name = 'Admin';
        $role->save();

        $role = new \App\Roles();
        $role -> name = 'Moderator';
        $role->save();

        $role = new \App\Roles();
        $role -> name = 'Użytkownik';
        $role->save();
    }
}
