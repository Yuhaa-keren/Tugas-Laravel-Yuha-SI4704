@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Projects</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection