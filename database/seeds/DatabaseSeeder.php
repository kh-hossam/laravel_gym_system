<?php

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
        $this->call([
            RolesAndPermissionsTableSeeder::class,
            UsersTableSeeder::class,
            CityTableSeeder::class,
            GymTableSeeder::class,
        ]);

        $this->command->info('Seeded the users!');   
        $this->command->info('Seeded the roles and permissions!');   
        $this->command->info('Seeded the cities!');   
        $this->command->info('Seeded the cities!');   
        $this->command->info('Seeded the gyms!');   
    }
    
}
