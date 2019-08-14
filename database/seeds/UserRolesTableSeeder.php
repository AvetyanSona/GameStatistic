<?php

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::insert([
            ['name' => 'user'],
            ['name' => 'moderator'],
            ['name' => 'superadmin']
        ]);
    }
}

