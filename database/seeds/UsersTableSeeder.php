<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        User::updateOrCreate([
            'id'=>5,
            'name' => 'admin',
            'email' =>'admin@admin.com',
            'password'=>bcrypt('123456'),
            'national_id'=>0,
            'gym_id'=>1
        
        ])->assignRole('admin');
        
        User::updateOrCreate([
                'id'=>2,
                'name' => 'city manager',
                'email' =>'city_manager@city_manager.com',
                'password'=>bcrypt('123456'),
                'national_id'=>0,
                'city_id'=>1

        ])->assignRole('city_manager');

        User::updateOrCreate([
                'id'=>3,
                'name' => 'gym manager',
                'email' =>'gym_manager@gym_manager.com',
                'password'=>bcrypt('123456'),
                'national_id'=>0,
                'gym_id'=>1
                
        ])->assignRole('gym_manager');

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        factory(App\User::class, 10)->create();
    }
}
