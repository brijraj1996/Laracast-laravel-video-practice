@extends('layout')

@section('content')


<div id = "wrapper">

    <div id = "page" class = "container">
<form method = "POST" action = "\login">
    @csrf
        <h1 class = "heading-has-text-weight-bold is-size-4"> User Login </h1>

        <div class = "field">
            <label class="label" for="email">Email</label>

            <div class = "control">
                <input class = "textarea @error('email') is-danger @enderror"
                 type = "text" 
                 name = "email" 
                 id = "email"
                >
                </textarea>
            </div> 
        </div>

        @error('email')
            <p class = "help is-danger">{{$errors->first('email')}}</p>
        @enderror


        <div class = "field">
            <label class="label" for="password">Password</label>

            <div class = "control">
                <input class = "password @error('password') is-danger @enderror"
                 type = "password" 
                 name = "password" 
                 id = "password"
                >
                </textarea>
            </div> 
        </div>

        @error('password')
            <p class = "help is-danger">{{$errors->first('password')}}</p>
        @enderror

        <div class = "field is-grouped">
            <div class = "control">
                <button class = "button is-link" type = "submit">Submit</button>
            <div>
        </div>

    </form>
@stop