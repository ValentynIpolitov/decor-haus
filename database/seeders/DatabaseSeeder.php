<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name' => 'Valentyn',
            'email' => 'sv.vartey@gmail.com'
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Vadym',
            'email' => 'vad.tili@gmail.com'
        ]);

        \App\Models\User::factory(1)->create([
            'name' => 'Oleg',
            'email' => 'decorhaus.sk@gmail.com'
        ]);
    }
}
