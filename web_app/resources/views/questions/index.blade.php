@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/questions" method="GET">
                <div class="form-group">
                    <label>Seleccione la pregunta:</label>
                    <select name="question_id" class="form-control">
                        @foreach($all_questions as $question_option)
                            <option value="{{$question_option->id}}" {{ $question_option->id == $question_id ? 'selected': ''}}>{{$question_option->id}}) {{$question_option->description}}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="submit" class="btn btn-primary" value="Mostrar Pregunta" />
                </div>
            </form>
            <br>
            @if($question != null)
                <div class="panel panel-default">
                <div class="panel-heading">{{$question->id}}) {{$question->description}}</div>
                <div class="panel-body">
                    <form action="answer" method="POST">
                        <?php $count = 0; ?>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="question_id" value="{{$question->id}}"/>
                        @foreach($question->options as $option)
                        <?php $count++; ?>
                        <input type="hidden" value="{{$option->answer['id']}}" name="answer_{{$count}}" />
                        <div class="row">
                            <div class="form-group col-m-10 col-md-offset-1">
                                <label class="col-md-4">{{$option->description}}</label>
                                <div class="col-md-6">
                                    <input class="form-control text-center" type="number" name="votes_{{$count}}" value="{{$option->answer['votes']}}" required/>
                                </div>
                            </div>
                        </div>
                        <br>
                        @endforeach
                        <input type="hidden" name="options_count" value="{{$count}}">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="col-md-2 col-md-offset-10">
                                    <input class="btn btn-danger" type="submit" value="Actualizar"/>
                                </div> 
                            </div>
                        </div>
                    </form>   
                </div>
            </div>
            <br>
            @endif
            <br>

        </div>
    </div>
    @if($question != null)
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div id="chart-div"></div>

            <?= Lava::render('PieChart', 'IMDB', 'chart-div') ?>            
        </div>
    </div>
    @endif
</div>
@endsection
