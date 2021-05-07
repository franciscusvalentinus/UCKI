<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            [
                'department'  => 'IBM',
            ],
            [
                'department'  => 'BMI',
            ],
            [
                'department'  => 'ACC',
            ],
            [
                'department'  => 'COM',
            ],
            [
                'department'  => 'HTB',
            ],
            [
                'department'  => 'CBZ',
            ],
            [
                'department'  => 'PSY',
            ],
            [
                'department'  => 'IMT',
            ],
            [
                'department'  => 'ISB',
            ],
            [
                'department'  => 'VCD',
            ],
            [
                'department'  => 'INA',
            ],
            [
                'department'  => 'FPD',
            ],
            [
                'department'  => 'MED',
            ],
            [
                'department'  => 'FTP',
            ],
            [
                'department'  => 'DLL',
            ],
            [
                'department'  => 'MEM',
            ],
        ];

        Department::insert($departments);
    }
}
