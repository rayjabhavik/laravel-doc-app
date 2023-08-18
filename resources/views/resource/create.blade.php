@extends('resource.master')
@section('name')
    Add New Detail
@endsection
@section('section')
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">firstName</label>
            <input type="text" name="first" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">lastName</label>
            <input type="text" name="last" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection



