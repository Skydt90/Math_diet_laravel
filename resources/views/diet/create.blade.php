@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center font-weight-bold">Opret Diet</div>
                <div class="card-body">
                    <form action="{{ route('diet.store') }}" method="POST">
                        @csrf
                        @include('diet.partials._form')
                    </form>
                </div>
            </div>
            @errors
            @enderrors
        </div>
    </div>  
@endsection