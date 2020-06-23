<?php

use Illuminate\Database\Seeder;
use App\Location;
use App\Employee;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Location::class, 10) -> create() -> each(function($location) {
        $employees = Employee::inRandomOrder() -> take(rand(1 , 5)) -> get();
        $location -> employees() -> attach($employees);
      });
    }
}
