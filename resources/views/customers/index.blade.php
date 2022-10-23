@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Customer Page</h1>
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
            @if(count($customers) > 0)
                @foreach($customers as $key => $customer)
                <tr>
                    <td scope="row">{{ ++$key }}</td>
                    <td>{{ $customer->first_name }}</td>
                    <td>{{ $customer->last_name }}</td> 
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>
                        <!-- update -->
                        <a class="btn btn-primary btn-sm" href="{{ route('customer.edit', $customer->id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                        
                        || 

                        <!-- delete -->
                        <form action="{{ route('customer.destroy', $customer->id) }}" method="post" id="delete-form-{{ $customer->id }}" style="display: none">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                        </form>
                        <button class="btn btn-danger btn-sm" 
                        onclick="if(confirm('Are you sure?')) {
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $customer->id }}').submit();
                        } else {
                            event.preventDefault();
                        }" 
                        >
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="6" class="text-center">There are no customer!</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection    