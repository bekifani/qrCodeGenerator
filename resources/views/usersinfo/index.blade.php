@extends('usersinfo.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Info</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('usersinfo.create') }}"> Create New User Info</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Image</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Remark</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($users as $info)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/images/{{ $info->profile_pic }}" width="100px"></td>
            <td>{{ $info->name }}</td>
            <td>{{ $info->first_name }}</td>
            <td>{{ $info->middle_name }}</td>
            <td>{{ $info->last_name }}</td>
            <td>{{ $info->phone }}</td>
            <td>{{ $info->email }}</td>
            <td>{{ $info->gender }}</td>
            <td>{{ $info->remark }}</td>
            <td>
                <form action="{{ route('usersinfo.destroy',$info->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('usersinfo.show',$info->id) }}">Show</a>

                    {{-- <a class="btn btn-primary" href="{{ route('usersinfo.edit',$info->id) }}">Edit</a> --}}

                    @csrf
                    @method('DELETE')

                    {{-- <button type="submit" class="btn btn-danger">Delete</button> --}}
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $users->links() !!}

@endsection
