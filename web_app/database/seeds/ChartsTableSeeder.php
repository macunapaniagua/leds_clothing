<?php

use Illuminate\Database\Seeder;
use App\Models\Chart;

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
      foreach ($charts as $chart) {
        Chart::create($chart);
      }
    }
}
