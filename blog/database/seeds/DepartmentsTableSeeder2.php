<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Departments::class, 5)->create();
        factory(App\Positions::class, 7)->create();
        factory(App\Salary::class, 10)->create();
        factory(App\Certification::class, 15)->create();
        factory(App\Applicants::class, 100)->create();
        factory(App\Staffs::class, 100)->create();
        factory(App\ChangeRecords::class, 100)->create();
    }
}
