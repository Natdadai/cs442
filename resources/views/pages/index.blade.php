{{-- resources/views/pages/index.blade.php --}}

@extends('layouts.main')
@section('content')
    <h1>
        List of All Pages
    </h1>
    @for($i = 1; $i <= 10; $i++)
        <div>
            <a href="{{ url("/pages/{$i}") }}">page {{ $i }}</a>
        </div>
    @endfor
    <img src="https://c.tenor.com/CPE0L1s2wLgAAAAC/spin-doge.gif">
@endsection
