@extends('layouts.app')

@section('content')
<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-6">
                <h2>Day Overview for {{ $diet->diet_name}}</h2>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Date</th>
                <th scope="col">Goal Weight</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($diet->days as $day)    
                <tr>
                    <th>{{ $day->id }}</th>
                    <td>{{ $day->date }}</td>
                    <td>{{ $day->goal_weight }}</td>
                    <td><a href="{{ route('day.show', ['day' => $day]) }}" class="btn btn-success">Show</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection