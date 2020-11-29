@extends('layouts.app')

@section('combined')

  @if(count($posts) > 0)
      <div>
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">View</th>
              <th scope="col">Full Name</th>
              <th scope="col">Email</th>
              <th scope="col">Number</th>
              <th scope="col">Update</th>
            </tr>
          </thead>

          @foreach($posts as $post)
          <tbody> 
            <tr>
            <td><a href="/users/{{$post->id}}" type="" class="btn btn-success">View</a></td>
            <td>{{$post->name}}</td>
            <td>{{ $post->email }}</td>
            <td>{{ $post->mobile }}</td>
            <td><a href="/users/{{$post->id}}/edit" type="" class="btn btn-secondary">Edit</a></td>
            </tr>
          </tbody>
          @endforeach
        </table>
      </div>
    
  @else
    <p> No users </p>
  @endif
@endsection