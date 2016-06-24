<?php

use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
          ['description' => 'Hombre', 'question_id' => 1],
          ['description' => 'Mujer', 'question_id' => 1],
          ['description' => 'La marca', 'question_id' => 3],
          ['description' => 'La calidad de la tela', 'question_id' => 3],
          ['description' => 'Los acabados', 'question_id' => 3],
          ['description' => 'Lo bien que le pueda quedar', 'question_id' => 3],
          ['description' => '1', 'question_id' => 4],
          ['description' => '2', 'question_id' => 4],
          ['description' => '3', 'question_id' => 4],
          ['description' => '4 o más', 'question_id' => 4],
          ['description' => 'Semanal', 'question_id' => 5],
          ['description' => 'Quincenal', 'question_id' => 5],
          ['description' => 'Mensual', 'question_id' => 5],
          ['description' => 'Entre 1 y 6 meses', 'question_id' => 5],
          ['description' => 'Cada 6 meses o más', 'question_id' => 5],
          ['description' => 'Menos de ¢10000', 'question_id' => 6],
          ['description' => 'Entre ¢10000 y ¢20000', 'question_id' => 6],
          ['description' => 'Entre ¢20000 y ¢30000', 'question_id' => 6],
          ['description' => 'Entre ¢30000 y ¢40000', 'question_id' => 6],
          ['description' => 'Mas de ¢40000', 'question_id' => 6],
          ['description' => 'Si', 'question_id' => 7],
          ['description' => 'No', 'question_id' => 7],
          ['description' => 'Si', 'question_id' => 8],
          ['description' => 'No', 'question_id' => 8],
          ['description' => 'Si', 'question_id' => 9],
          ['description' => 'No', 'question_id' => 9],
          ['description' => 'Entre ¢5000 y ¢10000', 'question_id' => 10],
          ['description' => 'Entre ¢10000 y ¢20000', 'question_id' => 10],
          ['description' => 'Entre ¢20000 y ¢30000', 'question_id' => 10],
          ['description' => 'Entre ¢30000 y ¢40000', 'question_id' => 10],
          ['description' => '¢40000 o más', 'question_id' => 10],
          ['description' => 'De 10 años a 15 años', 'question_id' => 2],
          ['description' => 'De 16 años a 21 años', 'question_id' => 2],
          ['description' => 'De 22 años a 26 años', 'question_id' => 2],
          ['description' => 'De 27 años a 32 años', 'question_id' => 2],
          ['description' => 'De 33 años a 38 años', 'question_id' => 2],
          ['description' => 'De 39 años a 44 años', 'question_id' => 2],
        ];
        foreach ($options as $option) {
          Option::create($option);
        }
    }
}
