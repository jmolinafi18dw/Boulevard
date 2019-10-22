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
            'web'=>'https://www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Pull&Bear',
            'direccion' => 'Local 6',
            'logo'=>'pull-bear.png',
            'telefono'=>'945612302',
            'web'=>'https://www.pullandbear.com/',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'H&M',
            'direccion' => 'Local 7',
            'logo'=>'hm.png',
            'telefono'=>'945612302',
            'web'=>'https://www2.hm.com/',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Pimkie',
            'direccion' => 'Local 25',
            'logo'=>'pimkie.png',
            'telefono'=>'945612302',
            'web'=>'https://www.pimkie.com/',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Dooers',
            'direccion' => 'Local 8',
            'logo'=>'dooers.png',
            'telefono'=>'945612302',
            'web'=>'www.dooers.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Massimo Dutti',
            'direccion' => 'Local 1',
            'logo'=>'massimo-dutti.png',
            'telefono'=>'945612302',
            'web'=>'https://www.massimodutti.com/',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Springfield',
            'direccion' => 'Local 12',
            'logo'=>'springfield.png',
            'telefono'=>'945612302',
            'web'=>'www.zara.com',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Punt Roma',
            'direccion' => 'Local 31',
            'logo'=>'punto-roma.png',
            'telefono'=>'945612302',
            'web'=>'https://www.puntroma.com/',
            'descripcion'=>'Tienda de ropa'
        ]);
        DB::table('tiendas')->insert([
            'nombre' => 'Mango',
            'direccion' => 'Local 24',
            'logo'=>'mango.png',
            'telefono'=>'945612302',
            'web'=>'https://www.mango.com/',
            'descripcion'=>'Tienda de ropa'
        ]);
    }
}
