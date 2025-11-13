<?php
 
namespace Database\Seeders;
 
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
 
    public function run(): void
    {
        // Törlünk adatokat, mielőtt seedelünk
        DB::statement('DELETE FROM products');
        DB::statement('DELETE FROM users');
 
        // Seederek futtatása
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
        ]);
 
        // Teszt felhasználó létrehozása
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}