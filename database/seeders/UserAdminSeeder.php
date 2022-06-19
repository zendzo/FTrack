<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;

            $user->name = "Accounting";
            $user->email = "accounting@foodtrack.com";
            $user->email_verified_at = now();
            $user->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
            $user->remember_token = Str::random();
            $user->role_id = 1;
            $save = $user->save();

        if ($save) {
            $this->command->info("Successfully create accounting user!");
        }
    }
}
