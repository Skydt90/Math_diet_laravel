@extends('layouts.app')

@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Diet Overview</h2>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created at</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diets as $diet)    
                <tr>
                    <th scope="row">{{ $diet->id }}</th>
                    <td>{{ $diet->diet_name }}</td>
                    <td>{{ $diet->created_at }}</td>
                    <td><a href="{{ route('diet.show', $diet) }}" class="btn btn-success">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection