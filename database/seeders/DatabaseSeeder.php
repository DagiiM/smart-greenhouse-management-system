<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Ability;
use App\Models\Role;
use App\Models\Contact;
use App\Models\Social;
use App\Models\Theme;
use App\Models\Image;
use App\Models\Service;
use App\Models\Ph;
use App\Models\Humidity;
use App\Models\Moisture;
use App\Models\Temperature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::statement('SET FOREIGN_KEY_CHECKS=0');

       User::truncate();
       Ability::truncate();
       Role::truncate();
       Contact::truncate();
       Social::truncate();
       Theme::truncate();
       Image::truncate();
       Service::truncate();
       Ph::truncate();
       Humidity::truncate();
       Moisture::truncate();
       Temperature::truncate();
       DB::table('ability_role')->truncate();
       DB::table('role_user')->truncate();

       $usersQuantity=100;
       $abilitiesQuantity=6;
       $rolesQuantity=5;
       $contactsQuantity=5;
       $socialsQuantity=5;
       $themesQuantity=5;
       $imagesQuantity=4;
       $servicesQuantity=4;
       $phQuantity=4;
       $humidityQuantity=4;
       $moistureQuantity=4;
       $temperatureQuantity=4;

      Ph::factory($phQuantity)->create();
      Moisture::factory($moistureQuantity)->create();
      Humidity::factory($humidityQuantity)->create();
      Temperature::factory($temperatureQuantity)->create();

      Ability::factory($abilitiesQuantity)->create();

      Role::factory($rolesQuantity)->create()->each(
        function($role){
          $abilities=Ability::all()->random(mt_rand(1,5))->pluck('id');
          $role->abilities()->attach($abilities);
        });
      User::factory($usersQuantity)->create()->each(
        function($user){
          $roles=Role::all()->random(mt_rand(1,5))->pluck('id');
          $user->roles()->attach($roles);
        });


      Contact::factory($contactsQuantity)->create();
      Social::factory($socialsQuantity)->create();

      Theme::factory($themesQuantity)->create();
      Image::factory($imagesQuantity)->create();
      Service::factory($servicesQuantity)->create();
    }
}
