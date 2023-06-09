@extends('admin.layouts.layout')
@section('content')
@forelse ($courses as $course)
    <a href="">
        <div class="card">
            <div>
                <img src="{{ $course->thumbnail }}" alt="">
            </div>
            <div>
                <h2>{{ $course->title }}</h2>
                <p>{{ $course->created_at }} </p>
                <h4>{{ $course->science  }}</h4>
            </div>
            <div>
                <a href="">delete</a>
                <a href="">edit</a>
            </div>
        </div>
    </a>
    
@empty
    
@endforelse
    
@endsection