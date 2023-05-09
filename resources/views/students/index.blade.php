@extends('layout/template')

@section('title', 'Students | School')

@section('content')

<main>
    <div class="container py-4">
        <h2>Students List</h2>

        <a href="{{ url('students/create') }}" class="btn btn-primary btn-sm">New record</a>

        <!--
        'enrollment' => 'required|unique:students|max:10'
        ,'name' => 'required|max:255'
        ,'birthdate' => 'required|date'
        ,'phone' => 'required|'
        ,'email' => 'nullable|email'
        ,'level' => 'required'
        -->

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Enrollment</th>
                    <th>Name</th>
                    <th>Birthdate</th>
                    <th>Phone</th>
                    <th>E-mail</th>
                    <th>Level</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($students as $student)
                    
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->enrollment }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->birthdate }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->level->name }}</td>
                    <td><a href="{{ url('students/'.$student->id.'/edit') }}" class="btn btn-warning btn-sm">Editar</a></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        

    </div>
</main>