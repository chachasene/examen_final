<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Vehicule;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@taxibokko.com',
               'type'=>1,
               'password'=> bcrypt('passer'),
            ],
            [
               'name'=>'Samba',
               'email'=>'samba@taxibokko.com',
               'type'=> 2,
               'password'=> bcrypt('passer'),
            ],
            [
               'name'=>'Chacha',
               'email'=>'chacha@gmail.com',
               'type'=>0,
               'password'=> bcrypt('passer'),
            ],
        ];

        $cars=[
            [
                'marque'=>'jeep',
                'couleur'=>'Blanche',
                'places'=>4
            ],
            [
                'marque'=>'Nissan',
                'couleur'=>'Noire',
                'places'=>6
            ],
            [
                'marque'=>'Toyota',
                'couleur'=>'Rouge',
                'places'=>4
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
        foreach ($cars as $key => $car) {
            Vehicule::create($car);
        }
    }
}