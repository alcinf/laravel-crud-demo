@extends('layout/template')

@section('title', 'Students | School')

@section('content')

<main>
    <div class="container py-4">
        <h2>Students List</h2>

        <a href="{{ url('students/create') }}" class="btn btn-primary btn-sm">New record</a>

    </div>
</main>