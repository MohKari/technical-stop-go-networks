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
    }

    private function addEmployees(): void
    {
        Employee::factory()
            ->count(10)
            ->create();
    }
}
