@extends('layout.master')
@section('content')
    <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name">
        </div>
        <div class="mb-3">
            <label for="Age">Age</label>
            <input type="number" class="form-control" name="Age">
        </div>
        <div class="mb-3">
            <label for="Picture">Picture</label>
            <input type="file" class="form-control" name="Picture">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
