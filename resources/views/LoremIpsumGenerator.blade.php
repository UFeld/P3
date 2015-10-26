@extends('_master')

@section('title')
    Lorum Ipsum Generator
@stop


@section('content')
        <h1>
Welcome to the Lorem Ipsum Generator

        </h1>
        <h1>

<!--blah-->
        </h1>

        <form method='POST' action='LoremIpsumGenerator'>
        <input type='text' name='numberOfParagraphs'><br>Number of paragraphs?<br>
        {!! csrf_field()!!}
        <input type='submit' value='Select Number of Paragraphs' ><br>
        </form>




@stop

@section('body')
    <script src="/js/books/show.js"></script>
@stop
