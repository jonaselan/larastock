<?php

use Illuminate\Database\Seeder;

class EvaluateProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(larastock\EvaluateProduct::class)->create();
    }
}
