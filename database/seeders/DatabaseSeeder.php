<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$user = User::create([
    		'name' => 'Juan Fernando',
            'email' => 'info@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
    	]);
        User::factory(10)->create();

        Storage::deleteDirectory('products');
        Storage::deleteDirectory('providers');
    	Storage::makeDirectory('products');
    	Storage::makeDirectory('providers');

        $this->call(CategorySeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(TaxSeeder::class);
        $this->call(ProviderSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(CompanySeeder::class);
    }
}
