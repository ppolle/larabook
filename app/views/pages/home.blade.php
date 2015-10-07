@extends('layouts.default')

@section('content')

    <div class="jumbotron">
        <h1>Welcome to larabook</h1>
        <p>welcome to the premier place to talk about Laravel.Why dont you sign up to find out more about Laraval.</p>
        <p>
            {{link_to_route('register_path','Sign Up',null,['class' =>'btn btn-lg btn-primary'])}}

        </p>
    </div>
    @stop