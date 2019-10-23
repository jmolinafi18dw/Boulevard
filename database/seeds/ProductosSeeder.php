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
            'stock'=>false,
            'extension'=>'jpg',
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Abrigo rojo',
            'descripcion'=>'Abrigo rojo oscuro',
            'extension'=>'jpg',
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Pantalón negro',
            'descripcion'=>'Abrigo negro grande',
            'stock'=>false,
            'extension'=>'jpg',
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos verdes',
            'descripcion'=>'Zapatos verde pistacho',
            'stock'=>false,
            'extension'=>'jpg',
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Gafas de sol negras',
            'descripcion'=>'Gafas de sol negro cristal azul',
            'extension'=>'jpg',
            'id_tienda'=>1
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Red Coat',
            'descripcion'=>'Dark red coat',
            'id_tienda'=>3,
            'extension'=>'jpg',
            'lang'=>'en'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Red Coat',
            'descripcion'=>'Dark red coat',
            'id_tienda'=>1,
            'extension'=>'jpg',
            'lang'=>'en'
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Zapatos verdes',
            'descripcion'=>'Zapatos verde pistacho',
            'stock'=>false,
            'extension'=>'jpg',
            'id_tienda'=>4
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Gafas de sol negras',
            'descripcion'=>'Gafas de sol negro cristal azul',
            'extension'=>'jpg',
            'id_tienda'=>2
        ]);
        DB::table('productos')->insert([
            'nombre' => 'Green shoes',
            'descripcion'=>'Light green shoes',
            'id_tienda'=>2,
            'extension'=>'jpg',
            'lang'=>'en'
        ]);
    }
}
