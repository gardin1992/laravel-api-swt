<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.home')

@section('title', 'Home')

@section('content')

    <div class="col-sm-2">

        <ul id="fileList">

            @foreach ($files as $file)
                <li data-url="{{ $file['url'] }}">{{ $file['name'] }}</li>
            @endforeach
        </ul>

    </div>

    <div class="col-sm-8">
        @include('partials/4mpbox')
    </div>

@endsection