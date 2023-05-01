@extends('layouts.app')

@section('title-block')home @endsection
@section('content')
    <div class="home">
        <a href="{{ route('user.logout')}}" class="logout">Logout</a>
        <div class="makeResume">
            <h1>Make new resume</h1>
            <form action="{{ route('user.home')}}" method="post" class="resume_form">
            @csrf
                <input type="text" name="name" class="resume_form_input" placeholder="Enter your full name">
                <input type="text" name="proffesion" class="resume_form_input" placeholder="Enter your proffesion">
                <input type="email" name="email" class="resume_form_input" placeholder="Enter your email">
                <input type="text" name="country" class="resume_form_input" placeholder="Enter your country">
                <input type="number" name="age" class="resume_form_input" placeholder="Enter your age">
                <input type="text" name="experience" class="resume_form_input" placeholder="Enter your experience">
                <input type="text" name="education" class="resume_form_input" placeholder="Enter your education">
                <input type="text" name="skills" class="resume_form_input" placeholder="Enter your skills">
                <input type="text" name="languages" class="resume_form_input" placeholder="What languages you know?">
                <input type="text" name="aboutMe" class="resume_form_input" placeholder="Tell me about you">

                <button type="submit" class="resume_form_btn">Make</button>
            </form>
        </div>
        <div class="myResumes">
            <h1>Your resumes</h1>
            @foreach($posts as $post)
                <div class="resumes_card">
                    <div>
                        <p>
                            Name:{{$post->name}}
                        </p>
                        <p>
                            Email:{{$post->email}}
                        </p>
                        <p>
                            Created at:{{$post->created_at}}
                        </p>
                    </div>
                    <a href="{{ route('user.view', $post->id)}}">Show</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection    