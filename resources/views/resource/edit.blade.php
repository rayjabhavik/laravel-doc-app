@extends('resource.master')
@section('name')
    Edit Detail
@endsection
@section('section')
    <form action="{{ route('users.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">firstName</label>
            <input type="text" name="first" value="{{ $data['first_name'] }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">lastName</label>
            <input type="text" name="last" value="{{ $data['last_name'] }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" value="{{ $data['email'] }}" name="email" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>

        <div class="d-flex justify-content-between">
            <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection


