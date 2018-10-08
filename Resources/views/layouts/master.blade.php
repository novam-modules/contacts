@extends('layouts.admin')
@section('head')
    <title>Module Contacts {{ isset($title)? " :: $title": '' }}</title>
@endsection
@section('styles')
{{-- <link rel="stylesheet" href="{{ mix('css/contacts.css') }}"> --}}
@endsection
@section('layout')
<div id="contacts" class="contacts">
    @yield('content')
</div>
@endsection
@section('scripts')
{{-- <script src="{{ mix('js/contacts.js') }}"></script> --}}
@endsection
