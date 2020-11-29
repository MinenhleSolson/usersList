@extends('users.index')

@section('content')
<style>

  .table{
    width: 80%;
    margin: auto ;
    margin-top: 40px;
  }
  
  #new{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
    margin-top: 20px;
  }
  
  
  </style>
  
  <button type="button" id="new" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModalScrollable">
    New User
  </button>
  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle"> Add New User </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('users.store')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="exampleFormControlInput1">Name</label>
              <input type="" class="form-control" name="name" id="name" placeholder="Enter Name(s)">
              @error('name')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Surname</label>
              <input type="" class="form-control" name="surname" id="surname" placeholder="Enter Last Name">
              @error('surname')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Username</label>
              <input type="" class="form-control" name="username" id="username" placeholder="Enter username">
              @error('username')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
             @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
              @error('email')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Mobile Number</label>
              <input type="" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number">
              @error('mobile')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Job Title</label>
              <input type="" class="form-control" name="job_title" id="job_title" placeholder="Enter Job Title">
              @error('job_title')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Bio</label>
              <textarea class="form-control" name="bio" id="bio"rows="3"></textarea>
              @error('bio')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password_confirmation" placeholder="Enter Password">
              @error('password')
              <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
            @enderror
            </div>
            <div class="form-group">
              <label for="password">Repeat Password</label>
              <input type="password" class="form-control" id="password" placeholder="Repeat Password">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add User</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  


@endsection