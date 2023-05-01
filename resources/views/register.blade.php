@extends('layouts.app')

@section('title-block')register @endsection

@section('content')
    <div class="login_page">
        <div class="login_card">
            <h1>Register</h1>
            <form action="{{ route('user.register')}}" method="post" class="login_form">
                @csrf
                <input type="text" class="login_input" name="name" placeholder="Enter your name" >
                <input type="email" class="login_input" name="email" placeholder="Enter your email" >
                <input type="password" class="login_input" name="password" placeholder="Enter password" >

                <button type="submit" class="login_btn">register</button>
            </form>
            <a href="/">Login</a>
        </div>
    </div>@endsection    