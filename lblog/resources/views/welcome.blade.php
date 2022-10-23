@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Home Page</h1>
    @if(session('successMsg'))
    <div class="alert alert-success" role="alert">
        {{ session('successMsg') }}
    </div>
    @endif

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>  
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
            <tr>
                <th scope="row">{{ $student->id }}</th>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td> 
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('edit', $student->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    || 
                    <form action="{{ route('delete', $student->id) }}" method="post" id="delete-form-{{ $student->id }}" style="display: none">
                        {{ csrf_field() }}
                        {{ method_field('delete') }}
                    </form>
                    <button class="btn btn-danger btn-sm" 
                    onclick="if(confirm('Are you sure?')) {
                        event.preventDefault();
                        document.getElementById('delete-form-{{ $student->id }}').submit();
                    } else {
                        event.preventDefault();
                    }" 
                    >
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $students->links() }}
</div>
@endsection    