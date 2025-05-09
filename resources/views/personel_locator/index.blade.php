@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Personnel Locator</h1>
    <a href="{{ route('personel_locator.create') }}" class="btn btn-success mb-3">Create New Personnel</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($personnel as $person)
                <tr>
                    <td>{{ $person->fullname }}</td>
                    <td>{{ $person->monday }}</td>
                    <td>{{ $person->tuesday }}</td>
                    <td>{{ $person->wednesday }}</td>
                    <td>{{ $person->thursday }}</td>
                    <td>{{ $person->friday }}</td>
                    
                    <td>
                        <a href="{{ route('personel_locator.edit', $person->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('personel_locator.destroy', $person->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

@endsection