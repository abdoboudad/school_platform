@extends('admin.layouts.layout')
@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">sciense</th>
        <th scope="col">courses number</th>
      </tr>
    </thead>
    <tbody>
      @php
        $test = 0
      @endphp
        @forelse ($languages as $language)
        
            <tr>
                <th scope="row">{{ $language->id }}</th>
                <td> <a class="text-dark" href="{{ route('admin.languages.courses',$language->science) }}">{{ $language->science }}</a></td>
                <th>i try to fix it and get the count value }</th>
              </tr>
        @empty

        @endforelse
    </tbody>
  </table>


@endsection