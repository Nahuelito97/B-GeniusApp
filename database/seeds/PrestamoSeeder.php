<?php

use App\Prestamo;
use Illuminate\Database\Seeder;

class PrestamoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Prestamo::class, 25)->create();
    }
}

