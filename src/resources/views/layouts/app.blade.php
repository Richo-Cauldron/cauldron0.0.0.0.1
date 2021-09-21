@extends('layouts.base')

@section('body')

        <x-core.navbar />
        
    @yield('content')
    
    @isset($slot)
        {{ $slot }}
    @endisset

@endsection
