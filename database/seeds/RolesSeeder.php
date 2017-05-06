<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
        	'Admin',
        	'User',
        	'Moderator',
        ];

        foreach ($roles as $role) {
        	Role::create([
        		'name' => $role
        	]);
        }
    }
}
