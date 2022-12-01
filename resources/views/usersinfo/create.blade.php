@extends('usersinfo.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New User Data</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('usersinfo.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('usersinfo.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
     <div class="row">
        <div class="col-xs-4 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
            </div>
        </div>
        <div class="col-xs-4 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Middle Name:</strong>
                <input type="text" name="middle_name" class="form-control" placeholder="Middle Name">
            </div>
        </div>
        <div class="col-xs-4 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
            </div>
        </div>
        <div class="col-xs-4 col-sm-12 col-md-4">
            <div class="form-group">
                <strong>Gender:</strong>
                <label>Male
                <input type="radio" name="gender" value="Male" class="form-control">
                </label>
                <label>Female
                <input type="radio" name="gender" value="Female" class="form-control">
                </label>
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Profile Picture:</strong>
                <input type="file" name="profile_pic" class="form-control" placeholder="image">
            </div>
        </div>
     </div>
     <div class="row">
        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-6 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>Phone :</strong>
                <input type="text" name="phone" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Physical Address:</strong>
                <input type="text" name="physical_address" class="form-control" placeholder="Name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Remark:</strong>
                <textarea class="form-control" style="height:150px" name="remark" placeholder="Detail"></textarea>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
