@extends('layouts.appp')

@section('title', 'Page Title')

@section('sidebar1')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content1')
    <p>This is my body content.</p>
@endsection
