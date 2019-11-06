@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-8">
        <h3>Overview for: {{ $day->date }}</h3>
        <p>{{ $day->goal_weight }}</p>
        <p>{{ $day->morning_weight }}</p>
        <p>{{ $day->allowed_food_intake }}</p>
        <p>{{ dd($day->created_at) }}</p>
        <p>{{ $day->updated_at }}</p>
        
    </div>
</div>
@endsection

