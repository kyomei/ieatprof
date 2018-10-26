<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ModuloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::insert('INSERT INTO modulos (nome_modulo, descricao_modulo, duracao_horas_modulo, duracao_meses_modulo, status_modulo, gratuito_modulo, color_class_modulo) VALUES (?,?,?,?,?,?,?)', array('Windows 10', 'Curso windows tem como...', '12', '2', '1', '0', 'bg-primary'));
    }
}
