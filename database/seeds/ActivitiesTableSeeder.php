<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        
        DB::table('activities')->insert([
            'id'=> '1',
            'nombre'=> 'Ajedrez',
            'descripcion'=>'------',
            'tipo'=>'Deportiva',
      
            
        ]);

        DB::table('activities')->insert([
            'id'=> '2',
            'nombre'=> 'Atletismo',
            'descripcion'=>'------',
           	'tipo'=>'Deportiva', 
        
            
            
        ]);

        DB::table('activities')->insert([
            'id'=> '3',
            'nombre'=> 'Basquetbol',
            'descripcion'=>'------',
           'tipo'=>'Deportiva',
       
         
        ]);
        DB::table('activities')->insert([
            'id'=> '4',
            'nombre'=> 'Beisbol',
            'descripcion'=>'------', 
            'tipo'=>'Deportiva',
 
            
        ]);

        DB::table('activities')->insert([
            'id'=> '5',
            'nombre'=> 'Futbol Femenil',
            'descripcion'=>'------',
            'tipo'=>'Deportiva',
    
            
            
        ]);
        DB::table('activities')->insert([
            'id'=> '6',
            'nombre'=> 'Artes Plasticas',
            'descripcion'=>'------',
            'tipo'=>'Cultural',
           
        
            
        ]);
        DB::table('activities')->insert([
            'id'=> '7',
            'nombre'=> 'Cine Club',
            'descripcion'=>'------',
          	'tipo'=>'Cultural',
         
            
        ]);
        DB::table('activities')->insert([
            'id'=> '8',
            'nombre'=> 'Dibujo Artistico',
            'descripcion'=>'------',
            'tipo'=>'Cultural',
        
           
            
        ]);
        DB::table('activities')->insert([
            'id'=> '9',
            'nombre'=> 'Guitarra Acustica(iniciacion)',
            'descripcion'=>'------',
           'tipo'=>'Cultural',
         
        ]);
        DB::table('activities')->insert([
            'id'=> '10',
            'nombre'=> 'Guitarra Acustica(Avanzado)',
            'descripcion'=>'------',
            'tipo'=>'Cultural',
         
           
            
        ]);
        DB::table('activities')->insert([
            'id'=> '11',
            'nombre'=> 'Banda de Guerra',
            'descripcion'=>'------',
           'tipo'=>'Civica',
            
        ]);
        DB::table('activities')->insert([
            'id'=> '12',
            'nombre'=> 'Escolta de Bandera',
            'descripcion'=>'------',
			'tipo'=>'Civica',
           
           
            
        ]);

         DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}

