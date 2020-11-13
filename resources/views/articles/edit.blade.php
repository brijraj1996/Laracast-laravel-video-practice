@extends('layout')

@section('content')

<div id = "wrapper">

    <div id = "page" class = "container">
    <form method = "post" action = "\articles\{{$article->id}}">
        @csrf
        @method('PUT')
        <h1 class = "heading-has-text-weight-bold is-size-4"> Update Article </h1>

        <div class = "field">
            <label class="label" for="title">Title</label>

            <div class = "control">
            <textarea class = "textarea" type = "text" name = "title" id = "title">{{$article->title}}</textarea>
            </div> 
        </div>


        <div class = "field">
            <label class="label" for="excerpt">Excerpt</label>

            <div class = "control">
            <textarea class = "textarea" name = "excerpt" id = "excerpt">{{$article->excerpt}}</textarea>
            </div> 
        </div>

        <div class = "field">
            <label class="label" for="title">Body</label>

            <div class = "control">
            <textarea class = "textarea" name = "body" id = "body">{{$article->body}}</textarea>
            </div> 
        </div>

        <div class = "field is-grouped">
            <div class = "control">
                <button class = "button is-link" type = "submit">Submit</button>
            <div>
        </div>
    </div>
</form>
</div>

@stop