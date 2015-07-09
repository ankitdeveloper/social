@extends('layouts.master')

@section('css', elixir('css/login.css'))

@section('content')

        @if(Auth::check())
<div>

          {!! Form::open(array('action' => 'MessagesController@receiveForm')) !!}
              {!! Form::text('message', "Enter your message here:") !!}
              {!! Form::file('image') !!}

              <br>
              {!! Form::submit('Click Me!') !!}
          {!! Form::close() !!}
        @endif
</div>
@endsection
