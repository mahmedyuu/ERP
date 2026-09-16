<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'Mahmed Company',
            'address' => 'lintas Sumatera',
            'email' => 'info@example.com',
            'phone_number' => '123-456-7890'
        ]);
    }
}
