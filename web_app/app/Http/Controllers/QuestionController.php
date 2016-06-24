<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Question;
use Input;
use Lava;

class QuestionController extends Controller
{
    protected $question;

    public function __construct(Question $question)
    {
        $this->middleware('auth');
        $this->question = $question; 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = null;
        $question_id = Input::Get('question_id');
        $all_questions = $this->question->orderBy('id')->get();
        if ($question_id != null) {
            $question = $this->question->find($question_id);
            $this->drawPieChart($question);
        }

        return view('questions/index', compact('all_questions', 'question', 'question_id'));
    }


    public function drawPieChart($question){

        $options = $question->options;
        $reasons = Lava::DataTable();

        $reasons->addStringColumn('Reasons')
                ->addNumberColumn('Percent');

        foreach ($options as $key => $option) {
            $reasons->addRow([$option->description, $option->answer['votes']]);
        }

        Lava::PieChart('IMDB', $reasons, [
            'title'  => "$question->id) $question->description",
            'is3D'   => true,
            'slices' => []
        ]);
    }
}
