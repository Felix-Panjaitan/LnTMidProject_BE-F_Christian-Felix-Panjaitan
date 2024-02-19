@extends('layouts.apps')

@section('content')
    <form action="{{ route('employes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="exampleInputEmail1"
                aria-describedby="emailHelp">
            @error('name')
                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Age</label>
            <input type="text" name="age" class="form-control @error('age')is-invalid @enderror"
                id="exampleInputPassword1">
            @error('age')
                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control @error('address')is-invalid @enderror"
                id="exampleInputPassword1">
            @error('address')
                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control @error('phone')is-invalid @enderror"
                id="exampleInputPassword1">
            @error('phone')
                <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
