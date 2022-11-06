<?php

namespace Database\Seeders;

use App\Models\Residence;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // https://source.unsplash.com/random/800x400?residence
        User::create([
            'name' => 'Admin1',
            'username' => 'admin1',
            'role' => 'admin',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin1')
        ]);
        User::create([
            'name' => 'User1',
            'username' => 'user1',
            'role' => 'user',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('user1')
        ]);

        Residence::create([
            'name' => 'Aliva Priva Jalvin',
            'slug' => 'aliva-priva-jalvin',
            'location' => '1087 Pin Oak Drive, Clinton, USA',
            'bed' => 4,
            'bath' => 2,
            'size' => 1023
        ]);
        Residence::create([
            'name' => 'Allpine lenevote',
            'slug' => 'allpine-lenevote',
            'location' => '1087 Pin Oak Drive, Clinton, USA',
            'bed' => 4,
            'bath' => 2,
            'size' => 1023
        ]);
        Residence::create([
            'name' => 'Hard line orchar',
            'slug' => 'hard-line-orchar',
            'location' => '1087 Pin Oak Drive, Clinton, USA',
            'bed' => 4,
            'bath' => 2,
            'size' => 1023
        ]);
        Residence::create([
            'name' => 'Aliva Priva Jalvin 2',
            'slug' => 'aliva-priva-jalvin-2',
            'location' => '1087 Pin Oak Drive, Clinton, USA',
            'bed' => 4,
            'bath' => 2,
            'size' => 1023
        ]);
        Residence::create([
            'name' => 'Allpine lenevote 2',
            'slug' => 'allpine-lenevote-2',
            'location' => '1087 Pin Oak Drive, Clinton, USA',
            'bed' => 4,
            'bath' => 2,
            'size' => 1023
        ]);
        Residence::create([
            'name' => 'Hard line orchar 2',
            'slug' => 'hard-line-orchar-2',
            'location' => '1087 Pin Oak Drive, Clinton, USA',
            'bed' => 4,
            'bath' => 2,
            'size' => 1023
        ]);

        for ($i = 1; $i <= 100; $i++) {
            Residence::create([
                'name' => "Aliva Priva Jalvin Pro Max $i",
                'slug' => "aliva-priva-jalvin-pro-max-$i",
                'location' => '1099 Pin Oak, Clinton, England',
                'bed' => 5,
                'bath' => 4,
                'size' => 2048
            ]);
        }
    }
}
