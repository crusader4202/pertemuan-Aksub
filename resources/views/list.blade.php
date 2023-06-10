@extends('layout.master')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Picture</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orangs as $orang)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $orang->name }}</td>
                    <td>{{ $orang->address }}</td>
                    @forelse ($orang->cars as $car)
                        <td>{{ $car->name }}</td>
                    @empty
                        <h1>No car</h1>
                    @endforelse
                    <td><img src="{{ asset('storage/images/' . $orang->picture) }}" style="width: 100px; height: 100px"></td>
                    <td><a href="{{ route('download', $orang->id) }}"><button type="button"
                                class="btn btn-primary">Download</button></a></td>
                    <td><a href="{{ route('edit', $orang->id) }}"><button type="button"
                                class="btn btn-info">Edit</button></a>
                    </td>
                    <form action="{{ route('delete', $orang->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                </tr>
            @empty
                <h1>Empty</h1>
            @endforelse
        </tbody>
    </table>
@endsection
