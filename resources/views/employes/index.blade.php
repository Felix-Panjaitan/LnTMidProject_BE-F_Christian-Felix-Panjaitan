@extends('layouts.apps')

@section('content')
@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif
<a class="btn btn-primary" href="{{route('employes.create')}}" role="button">Create</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach($employes as $employe)
      <tr>
        <th scope="row">{{$employe->id}}</th>
        <td>{{$employe->name}}</td>
        <td>{{$employe->age}}</td>
        <td>{{$employe->address}}</td>
        <td>{{$employe->phone}}</td>
        <td>
            <a class="btn btn-info" href="{{route('employes.show',$employe->id)}}" role="button">Show</a>
            <form action="{{route('employes.delete',$employe->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
      </tr>
        @endforeach
    </tbody>
  </table>
@endsection