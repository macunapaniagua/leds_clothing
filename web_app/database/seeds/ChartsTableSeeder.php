<?php

use Illuminate\Database\Seeder;
use App\Chart;

class ChartsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $charts = [
        ['description' => 'Barras'],
        ['description' => 'Circular']
      ];
      Chart::create($chart);
    }
}
