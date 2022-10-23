@extends('layouts.main')

@section('content')
<div class="container">
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
        {{ $error }}
    </div>
    @endforeach
    @endif

    <h1>Edit Customer Page</h1>
    <form class="text-center" action="{{ route('customer.update', $customer->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <p class="h4 mb-4">Edit Customer</p>
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div class="form-outline">
            <input name="first_name" value="{{ $customer->first_name }}" placeholder="First name" type="text" id="form3Example1" class="form-control" />
        </div>
        </div>
        <div class="col">
        <div class="form-outline">
            <input name="last_name" value="{{ $customer->last_name }}" placeholder="Last name" type="text" id="form3Example2" class="form-control" />
        </div>
        </div>
    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <input name="email" value="{{ $customer->email }}" placeholder="Email" type="email" id="form3Example3" class="form-control" />
    </div>

    <!-- Phone Number input -->
    <div class="form-outline mb-4">
        <input name="phone" value="{{ $customer->phone }}" placeholder="Phone Number" type="text" id="form3Example4" class="form-control" />
    </div>

    <!-- Submit button -->  
    <button type="submit" class="btn btn-primary btn-block mb-4">Update Data</button>

</form>
</div>
@endsection