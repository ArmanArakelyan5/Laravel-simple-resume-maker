@extends('layouts.app')

@section('title-block')Resumes PDF @endsection
@section('content')
<div class="myResume">
    @foreach($posts as $post)
        <div class="resume_name">
            <h1>{{$post->name}}</h1>
            <h2>{{$post->proffesion}}</h2>
        </div>
        <div class="resume_contacts">
            <h4>Email:{{$post->email}}</h4>
            <h4>Country:{{$post->country}}</h4>
            <h4>Age:{{$post->age}}</h4>
        </div>
        <div class="resume_block">
            <div class="resume_container">
                <div class="resume_card">
                    <h3>Experience</h3>
                    <p>{{$post->experience}}</p>
                </div>
                <div class="resume_card">
                    <h3>Education</h3>
                    <p>{{$post->education}}</p>
                </div>
                <div class="resume_card">
                    <h3>Skills</h3>
                    <p>{{$post->skills}}</p>
                </div>
                <div class="resume_card">
                    <h3>Languages</h3>
                    <p>{{$post->languages}}</p>
                </div>
                <div class="resume_card">
                    <h3>About me</h3>
                    <p>{{$post->aboutMe}}</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection