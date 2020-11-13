@extends('layout')

@section('content')

<div id = "wrapper">

    <div id = "page" class = "container">
<form method = "POST" action = "\articles">
    @csrf
        <h1 class = "heading-has-text-weight-bold is-size-4"> Create Article </h1>

        <div class = "field">
            <label class="label" for="title">Title</label>

            <div class = "control">
                <input class = "textarea @error('title') is-danger @enderror"
                 type = "text" 
                 name = "title" 
                 id = "title"
                value = "{{old('title')}}">
                </textarea>
            </div> 
        </div>

        @error('title')
            <p class = "help is-danger">{{$errors->first('title')}}</p>
        @enderror

        <div class = "field">
            <label class="label" for="excerpt">Excerpt</label>

            <div class = "control">
                <input class = "textarea @error('excerpt') is-danger @enderror"
                 name = "excerpt"
                  id = "excerpt"
                value = "{{old('excerpt')}}">
                </textarea>
            </div> 
        </div>

        @error('excerpt')
            <p class = "help is-danger">{{$errors->first('excerpt')}}</p>
        @enderror

        <div class = "field">
            <label class="label" for="title">Body</label>

            <div class = "control">
                <input class = "textarea @error('excerpt') is-danger @enderror" 
                name = "body" 
                id = "body"
            value = "{{old('body')}}">
            </textarea>
            </div> 
        </div>

        @error('body')
            <p class = "help is-danger">{{$errors->first('body')}}</p>
        @enderror

        <div class = "field">
            <label class="label" for="title">Tags</label>
            <div class = " select is-multiple control">
        <select 
            name = "tags[]"
            multiple
        >
            @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
            @endforeach
        </select>

        @error('tags')
            <p class = "help is-danger">{{$message}}</p>
        @enderror

        <div class = "field is-grouped">
            <div class = "control">
                <button class = "button is-link" type = "submit">Submit</button>
            <div>
        </div>
    </div>
</div>
</form>
</div>

@stop