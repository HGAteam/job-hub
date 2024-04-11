<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'first_name'        => 'System',
            'last_name'         => 'Admin',
            'email'             => 'your_email@domain.com',
            'active'            => true,
            'slug'              => 'system-admin',
            'role_id'              => 1,
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('your_email@domain.com'),
        ])->assignRole('Administrator');

        $this->addDummyInfo($faker, $demoUser);

        User::factory(100)->create()->each(function (User $user) use ($faker) {
            $this->addDummyInfo($faker, $user);
        });
      }

    private function addDummyInfo(Generator $faker, User $user)
    {
        $dummyInfo = [
            'phone'    => $faker->phoneNumber,
            'mobile'  => $faker->phoneNumber,
        ];

        $info = new UserInfo();
        foreach ($dummyInfo as $key => $value) {
            $info->$key = $value;
        }
        $info->user()->associate($user);
        $info->save();
    }
}
