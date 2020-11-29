@extends('layouts.app')

@section('content')
<style>

  form{
    width: 50%;
    margin: auto ;
    margin-top: 40px;
    box-shadow: 0px 0px 1px 1px rgb(28, 28, 41);
    border-radius: 4px;
    padding: 10px
  }
  
  #new{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    margin-top: 20px;
  }
  
  
  </style>
 
          <form action="{{ route('users.update', $post->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="" class="form-control" name="name" id="name" placeholder="Enter Name(s)" value='{{$post->name}}'>
              @error('name')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Surname</label>
            <input type="" class="form-control" name="surname" id="surname" placeholder="Enter Last Name" value='{{$post->surname}}'>
              @error('surname')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Username</label>
              <input type="" class="form-control" name="username" id="username" placeholder="Enter username" value='{{$post->username}}'>
              @error('username')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
             @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value='{{$post->email}}' readonly>
              @error('email')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Mobile Number</label>
              <input type="" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number" value='{{$post->mobile}}'>
              @error('mobile')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Job Title</label>
              <input type="" class="form-control" name="job_title" id="job_title" placeholder="Enter Job Title" value='{{$post->job_title}}'>
              @error('job_title')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Bio</label>
              <textarea class="form-control" name="bio" id="bio"rows="3" value='{{$post->bio}}'></textarea>
              @error('bio')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Password</label>
              <input type="" class="form-control" name="password" id="password" placeholder="Enter Password" value='{{$post->password}}' readonly>
              @error('password')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="modal-footer">
              <a type="button" href="/users/create" class="btn btn-secondary" data-dismiss="modal">Go Back</a>
              <button type="submit" class="btn btn-primary">Update User</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  


@endsection