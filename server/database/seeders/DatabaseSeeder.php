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
        DB::statement('DELETE FROM instruments');
 
        // Seederek futtatása
        $this->call([
            InstrumentSeeder::class,
        ]);
 
        // Teszt felhasználó létrehozás
    }
}