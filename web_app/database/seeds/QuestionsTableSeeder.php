<?php

use Illuminate\Database\Seeder;
use App\Question;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $bar = 1;
      $pie = 2;
      $questions = [
        ['description' => 'Seleccione su sexo', 'chart_id'=> $pie],
        ['description' => 'Digite su edad', 'chart_id'=> $pie],
        ['description' => '¿Al momento de comprar una prenda de ropa, qué es lo primero que toma en cuenta?', 'chart_id'=> $bar],
        ['description' => '¿En promedio cuántos trajes de ropa utiliza por día?', 'chart_id'=> $pie],
        ['description' => '¿Con qué frecuencia compra usted ropa aproximadamente?', 'chart_id'=> $pie],
        ['description' => '¿Cuánto dinero invierte en promedio por mes en la compra de ropa?', 'chart_id'=> $pie],
        ['description' => '¿Le parece una buena idea que exista en el mercado un traje con tecnología leds para la simulación de ropa? ', 'chart_id'=> $pie],
        ['description' => '¿Te gustaría participar en la prueba de un nuevo traje de luces leds para la simulación de ropa y recibir un descuento por probarlo?', 'chart_id'=> $pie],
        ['description' => '¿Estaría usted dispuesto(a) a adquirir un traje de luces leds para la simulación de ropa?', 'chart_id'=> $pie],
        ['description' => '¿Cuánto estaría dispuesto a pagar por un traje con tecnología leds para la simulación de ropa?', 'chart_id'=> $pie],
      ];
      foreach ($questions as $question) {
        Question::create($question);
      }
    }
}
