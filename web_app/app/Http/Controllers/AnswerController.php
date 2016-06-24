<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Answer;
use App\Http\Requests;

class AnswerController extends Controller
{
    protected $answer;

    public function __construct(Answer $answer)
    {
        $this->middleware('auth');
        $this->answer = $answer; 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_answers(Request $request)
    {
    	$options_count = $request->options_count;
    	for ($i = 1; $i <= $options_count; $i++) {
    		$answer_id = $request["answer_$i"];
    		$votes = $request["votes_$i"];
    		$answer = $this->answer->find($answer_id);
    		$answer->votes = $votes;
    		$answer->save();
    	}

        return redirect('/questions');
    }
}
