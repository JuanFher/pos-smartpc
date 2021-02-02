<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $company = Company::create([
        	'name' => 'Smartpc Ecuador',
        	'address' => 'Quito Ecuador',
			'phone' => '0995850151',
			'email' => 'juanfernandopc85@gmail.com',
			'ruc_number' => '1234567890'
        ]);
    }
}
