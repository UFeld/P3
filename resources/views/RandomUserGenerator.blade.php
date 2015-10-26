@extends('_master')

@section('title')
    Random User Generator
@stop


@section('content')
        <h1>
<!--write an explanation of the page-->
This is a test blah!

        </h1>
        <h1>

<!--blah-->
        </h1>

        <form method='POST' action='RandomUserGenerator'>
        <input type='text' name='numberOfUsers'><br>Number of users?<br>
        {!! csrf_field()!!}
        <input type='submit' value='Select Number of Users' ><br>
        </form>


@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
