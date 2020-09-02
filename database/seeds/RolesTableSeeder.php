<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        
        DB::table('roles')->insert([
            'id'=> '1',
            'nombre'=> 'Administrador',
            
        ]);

        DB::table('roles')->insert([
            'id'=> '2',
            'nombre'=> 'Promotor',
            
        ]);






         DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
