<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" />
    <title>Home</title>
</head>
<body>
    <div class="col-3">
    {{Form::open(['route'=>'bet_add_post'])}}
        <div class="form-group">
        {{Form::label('bet','Insert Bet amount')}}
        {{Form::number('bet',null,['class'=>'form-control','step'=>'any'])}}
        </div>
        <div class="form-group">
        {{Form::label('win','Insert Win amount')}}
        {{Form::number('win',null,['class'=>'form-control','step'=>'any'])}}
        </div>
        <div class="form-group">
        {{Form::label('rake','Insert Rake amount')}}
        {{Form::number('rake',null,['class'=>'form-control','step'=>'any'])}}
        </div>
        <div class="form-group">
        {{Form::label('net','Insert Net amount')}}
        {{Form::number('net',null,['class'=>'form-control','step'=>'any'])}}
        </div>
        <div class="form-group">
        {{Form::label('playerid','Select Player')}}
        {{Form::select('playerid',array_merge([''=>'Select a Player'],$players),null,['class'=>'form-control','required'=>'required'])}}
        </div>
        <div class="form-group">
        {{Form::label('agentid','Select Agent')}}
        {{Form::select('agentid',array_merge([''=>'Select an Agent'],$agents),null,['class'=>'form-control','required'=>'required'])}}
        </div>
        <div class="form-group">
        {{Form::submit('Submit');}}
        </div>
    {{Form::close()}}
    </div>
</body>
</html>