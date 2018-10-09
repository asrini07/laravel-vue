<?php

use App\Employe;
use Faker\Factory;
use Illuminate\Database\Seeder;

class EmployeTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Factory::create();

        Employe::truncate();
        
        foreach (range(1,200) as $a ) {
        	Employe::create([
        		'nama'=> $faker->name,
        		'alamat'=> $faker->address,
        		'hp'=> $faker->phoneNumber,
        		'jk'=> str_random(5),
        	]);
        }

    }
}
