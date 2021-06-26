<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'password' => bcrypt('admin@123'),
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }

}
