<?php

use App\Mascota;
use App\User;
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
        DB::table('tipos')->insert([
            'nombre' => 'Canino',
        ]);

        DB::table('tipos')->insert([
            'nombre' => 'Felino',
        ]);

        factory(User::class, 3)->create();
        // factory(Mascota::class, 8)->create();
        // $this->call(UsersTableSeeder::class);

    }
}
