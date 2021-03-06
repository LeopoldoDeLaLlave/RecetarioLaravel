<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        App\Recetas::truncate(); //vacía la tabla de preguntas
        DB::unprepared(file_get_contents('database/recetas_soloInsert.sql'));
    }
}
