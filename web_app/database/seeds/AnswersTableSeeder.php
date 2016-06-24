<?php

use Illuminate\Database\Seeder;
use App\Models\Answer;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $answers = [
        ['votes' => 19, 'option_id'=> 1],//pregunta 1
        ['votes' => 11, 'option_id'=> 2],
        ['votes' => 5, 'option_id'=> 3],//pregunta 3
        ['votes' => 10, 'option_id'=> 4],
        ['votes' => 7, 'option_id'=> 5],
        ['votes' => 26, 'option_id'=> 6],
        ['votes' => 5, 'option_id'=> 7],//pregunta 4
        ['votes' => 23, 'option_id'=> 8],
        ['votes' => 2, 'option_id'=> 9],
        ['votes' => 0, 'option_id'=> 10],
        ['votes' => 0, 'option_id'=> 11],//pregunta 5
        ['votes' => 3, 'option_id'=> 12],
        ['votes' => 4, 'option_id'=> 13],
        ['votes' => 9, 'option_id'=> 14],
        ['votes' => 14, 'option_id'=> 15],
        ['votes' => 11, 'option_id'=> 16],//pregunta 6
        ['votes' => 4, 'option_id'=> 17],
        ['votes' => 8, 'option_id'=> 18],
        ['votes' => 5, 'option_id'=> 19],
        ['votes' => 2, 'option_id'=> 20],
        ['votes' => 20, 'option_id'=> 21],//pregunta 7
        ['votes' => 10, 'option_id'=> 22],
        ['votes' => 15, 'option_id'=> 23],//pregunta 8
        ['votes' => 15, 'option_id'=> 24],
        ['votes' => 20, 'option_id'=> 25],//pregunta 9
        ['votes' => 10, 'option_id'=> 26],
        ['votes' => 13, 'option_id'=> 27],//pregunta 10
        ['votes' => 12, 'option_id'=> 28],
        ['votes' => 3, 'option_id'=> 29],
        ['votes' => 1, 'option_id'=> 30],
        ['votes' => 1, 'option_id'=> 31],
        ['votes' => 1, 'option_id'=> 32],//pregunta 1
        ['votes' => 7, 'option_id'=> 33],
        ['votes' => 14, 'option_id'=> 34],
        ['votes' => 3, 'option_id'=> 35],
        ['votes' => 3, 'option_id'=> 36],
        ['votes' => 2, 'option_id'=> 37]
      ];
      foreach ($answers as $answer) {
        Answer::create($answer);
      }
    }
}
