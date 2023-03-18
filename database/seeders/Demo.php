<?php

namespace Database\Seeders;

use App\Models\AccessCard;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Demo extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->addEmployees();
        $this->addDepartments();
        $this->addBuildings();
        $this->addDepartmentsToBuildings();
        $this->addDepartmentsToEmployees();
    }

    private function addEmployees(): void
    {
        // make sure first employee is Julius with known RFID
        DB::table('access_cards')->insert([
            'id' => 1,
            'card_number' => '142594708f3a5a3ac2980914a0fc954f',
        ]);
        DB::table('employees')->insert([
           'id' => 1,
           'access_card_id' => 1,
           'first_name' => 'Julius',
           'last_name' => 'Caesar',
        ]);

        // 9 more random employees
        Employee::factory()
            ->count(9)
            ->create();
    }

    private function addDepartments(): void
    {
        DB::table('departments')->insert([
            ['id' => 1, 'name' => 'Development'],
            ['id' => 2, 'name' => 'Accounting'],
            ['id' => 3, 'name' => 'Human Resources'],
            ['id' => 4, 'name' => 'Sales'],
            ['id' => 5, 'name' => 'Director'],
        ]);
    }

    private function addBuildings(): void
    {
        DB::table('buildings')->insert([
            [
                'id' => 1,
                'name' => 'Isaac Newton',
                'country' => 'UK',
            ],
            [
                'id' => 2,
                'name' => 'Oscar Wilde',
                'country' => 'UK',
            ],
            [
                'id' => 3,
                'name' => 'Charles Darwin',
                'country' => 'UK',
            ],
            [
                'id' => 4,
                'name' => 'Benjamin Franklin',
                'country' => 'USA',
            ],
            [
                'id' => 5,
                'name' => 'Luciano Pavarotti',
                'country' => 'UK',
            ]
        ]);
    }

    private function addDepartmentsToBuildings(): void
    {
        DB::table('building_department')->insert([
           [
               'building_id' => 1,
               'department_id' => 1,
           ],
           [
               'building_id' => 1,
               'department_id' => 2,
           ],
           [
               'building_id' => 2,
               'department_id' => 3,
           ],
           [
               'building_id' => 2,
               'department_id' => 4,
           ],
           [
               'building_id' => 4,
               'department_id' => 1,
           ],
           [
               'building_id' => 4,
               'department_id' => 4,
           ],
           [
               'building_id' => 5,
               'department_id' => 1,
           ],
           [
               'building_id' => 5,
               'department_id' => 4,
           ],
       ]);
    }

    private function addDepartmentsToEmployees(): void
    {
        DB::table('department_employee')->insert([
            [
                'department_id' => 5,
                'employee_id' => 1,
            ],
            [
                'department_id' => 1,
                'employee_id' => 1,
            ]
        ]);
    }

}
