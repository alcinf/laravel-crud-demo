@extends('layout/template')

@section('title', 'Register student | School')

@section('content')

<main>
    <div class="container py-4">
        <h2>Register student</h2>

        <form action="{{ url('students') }}" method="post">
        
            @csrf

            <div class="mb-3 row">
                <label for="enrollment" class="col-sm-2 col-form-label">Enrollment:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="enrollment" id="enrollment" value="{{ old('enrollment') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Full name:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="birthdate" class="col-sm-2 col-form-label">Birthdate:</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="birthdate" id="birthdate" value="{{ old('birthdate') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="phone" class="col-sm-2 col-form-label">Phone:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="email" class="col-sm-2 col-form-label">E-mail:</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="level" class="col-sm-2 col-form-label">Level:</label>
                <div class="col-sm-5">
                    <select name="level" id="level" class="form-select" required>
                        <option value="">Select level</option>
                        @foreach ($levels as $level)
                        <option value="{{ $level->id }}">{{ $level->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{ url('students') }}" class="btn btn-secondary">Return</a>

            <button type="submit" class="btn btn-success">Save</button>

        </form>

    </div>
</main>
