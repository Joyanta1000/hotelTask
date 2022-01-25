<?php

namespace Database\Seeders;

use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
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
        // \App\Models\User::factory(10)->create();
        // \App\Models\Room::factory()
        //    ->create()
        //    ->each(function ($room) {
        //         $room->packages()->save(factory(\App\Models\Package::class)->make());
        //     });
        // \App\Models\Package::factory(3)->create()
        // ->each(function ($user) {
        //     $user->posts()->save(factory(\App\Models\Package::class)->make());
        // });
        // \App\Models\Room::factory(2)->create();
        // \App\Models\Package::factory(4)->create();
        // \App\Models\Rate::factory(4)->create();

        $this->call([
            RoomSeeder::class,
            PackageSeeder::class,
            RateSeeder::class
        ]);

    }
}
