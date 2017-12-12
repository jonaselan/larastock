<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      // DB::insert('insert into products
      // (name, count, value, description)
      // values (?,?,?,?)',
      // array('Geladeira', 2, 590.00, 'Side by Side com gelo na porta'));
      //
      // DB::insert('insert into products
      // (name, count, value, description)
      // values (?,?,?,?)',
      // array('Fogão', 5, 95.00, 'Painel automático e forno elétrico'));
      //
      // DB::insert('insert into products
      // (name, count, value, description)
      // values (?,?,?,?)',
      // array('Microondas', 1, 150.00, 'Manda SMS quando termina de esquentar'));

      factory(larastock\Product::class)->create();
    }
}
