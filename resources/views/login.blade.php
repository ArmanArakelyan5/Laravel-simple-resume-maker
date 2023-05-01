@extends('layouts.app')

@section('title-block')login @endsection

@section('content')
    <div class="login_page">
        <div class="login_card">
            <h1>Login</h1>
            <form action="{{ route('user.login')}}" method="POST" class="login_form">
                @csrf
                <input type="email" name="email" class="login_input" placeholder="Enter Email" >
                <input type="password" name="password" class="login_input" placeholder="Enter password" >

                <button type="submit" class="login_btn">login</button>
            </form>
            <a href="/register">Register</a>
        </div>
    </div>
@endsection    