@extends('layouts.app')

@section('content')

<style>
.card{
  width: 80%;
  margin: auto ;
  margin-top: 40px;
}
.card-header{
    background-color: rgb(49, 49, 61);
    color: white
}

</style>

<div class="card text-center">
    <div class="card-header">
      <h2>{{$post->name}}</h2>
    </div>
    <div class="card-body">
        <h5 class="card-title">Username</h5>
      <p class="card-text">{{$post->username}} </p>
      <hr>
      <h5 class="card-title">Email</h5>
      <p class="card-text">{{$post->email}} </p>
        <hr>
      <h5 class="card-title">Mobile Number</h5>
      <p class="card-text">{{$post->mobile}} </p>
      <hr>
      <h5 class="card-title">Job title</h5>
      <p class="card-text">{{$post->job_title}} </p>
      <hr>
        <h5 class="card-title">Bio</h5>
      <p class="card-text">{{$post->bio}} </p> 

      <a href="/users" class="btn btn-secondary">Go back</a>
      <a href="/users/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
    </div>
  </div>
@endsection 