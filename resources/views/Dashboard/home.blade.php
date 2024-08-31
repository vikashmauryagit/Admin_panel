@extends('Layout.main')

@section('content')
    @session('status')
        <div class="alert alert-success" role="alert">
            <span class="text-light">{{ session('status') }}</span>
        </div>
    @endsession
    

@endsection
