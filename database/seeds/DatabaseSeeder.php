<?php

use App\Estado;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ClientesTableSeeder::class);
        $this->call(CategoriaTableSeeder::class);
        $this->call(EstadosTableSeeder::class);
        $this->call(LibroSeeder::class);
        $this->call(PrestamoSeeder::class);

    }
}
