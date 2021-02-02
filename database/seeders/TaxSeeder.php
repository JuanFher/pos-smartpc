<?php

namespace Database\Seeders;

use App\Models\Tax;
use Illuminate\Database\Seeder;

class TaxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tax = Tax::create([
        	'name' => 'IVA 12 %',
        	'value' => 12
        ]);

         $tax = Tax::create([
        	'name' => 'IVA 0 %',
        	'value' => 0
        ]);
    }
}
