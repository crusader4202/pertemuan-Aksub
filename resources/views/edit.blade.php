@extends('layout.master')
@section('content')
    <h1> Edit Page </h1>
    <form action="{{ route('update', $orang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="Name" value="{{ $orang->name }}">
        </div>
        <div class="mb-3">
            <label for="Age">Age</label>
            <input type="number" class="form-control" name="Age" value="{{ $orang->age }}">
        </div>
        <div class="mb-3">
            <label for="Picture">Picture</label>
            <input type="file" class="form-control" name="Picture">
        </div>
        @if ($orang->picture)
            <img src="{{ asset('storage/images/' . $orang->picture) }}" style="width: 1000px; height: 1000px">
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
