<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Accounting',
            'Front Office'
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role
            ]);
        }

        $this->command->info("Role Data Created");
    }
}
