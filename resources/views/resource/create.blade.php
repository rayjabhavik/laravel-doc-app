@extends('resource.master')
@section('name')
    Add New Detail
@endsection
@section('section')
    @if ($message = Session::get('success'))
        <span>
            <strong>{{ $message }}</strong>
        </span>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">firstName</label>
            <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}">
        </div>
        <div class="mb-3">
            <label class="form-label">lastName</label>
            <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ old('email') }}" >
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
            </div>
        </div>

        <div class="d-flex justify-content-between">
            <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
