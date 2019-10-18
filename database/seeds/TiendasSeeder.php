<?php

use Illuminate\Database\Seeder;

class TiendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tiendas')->insert([
            'nombre' => 'Zara',
            'direccion' => 'Local 3',
            'logo'=>'zara.png',
            'telefono'=>'945612302',
            'web'=>'www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Zara',
            'direccion' => 'Local 3',
            'logo'=>'zara.png',
            'telefono'=>'945612302',
            'web'=>'www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Zara',
            'direccion' => 'Local 3',
            'logo'=>'zara.png',
            'telefono'=>'945612302',
            'web'=>'www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Zara',
            'direccion' => 'Local 3',
            'logo'=>'zara.png',
            'telefono'=>'945612302',
            'web'=>'www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Zara',
            'direccion' => 'Local 3',
            'logo'=>'zara.png',
            'telefono'=>'945612302',
            'web'=>'www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Zara',
            'direccion' => 'Local 3',
            'logo'=>'zara.png',
            'telefono'=>'945612302',
            'web'=>'www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
    }
}
