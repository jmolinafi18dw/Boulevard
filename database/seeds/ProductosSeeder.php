<?php

use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
            'nombre' => 'Abrigo negro',
            'descripcion'=>'Abrigo negro grande',
            'imagen'=>'zara.jpg',
            'stock'=>false,
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Abrigo rojo',
            'descripcion'=>'Abrigo rojo oscuro',
            'imagen'=>'zara.jpg',
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pantalón negro',
            'descripcion'=>'Abrigo negro grande',
            'imagen'=>'zara.jpg',
            'stock'=>false,
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos verdes',
            'descripcion'=>'Zapatos verde pistacho',
            'imagen'=>'zara.jpg',
            'stock'=>false,
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Gafas de sol negras',
            'descripcion'=>'Gafas de sol negro cristal azul',
            'imagen'=>'zara.jpg',
            'id_tienda'=>1
        ]);
    }
}
