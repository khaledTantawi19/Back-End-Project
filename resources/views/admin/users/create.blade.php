@extends('admin.layout.main')


@section('title', 'Add User')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2>Add User</h2>
                <div class="card col-md-10">
                    <div class="card-body ">
                        <form class="row g-3" method="POST" action="{{ route('user.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputName4" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName4" name="name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email">
                            </div>
                            <div class="col-6">
                                <label for="inputV_age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="inputV_age" name="age" value="{{ old('age') }}">
                            </div>
                            <div class="col-6">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password">
                            </div>
                            <div class="col-6">
                                <label for="admin">Select admin or user</label>
                                <select name="select" id="admin" class="form-control">
                                    <option value="">Select</option>
                                    <option value="0">User </option>
                                    <option value="1">Admin </option>
                                    <option value="2">Moderator </option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="inputV_Password" class="form-label">Password Confirmation</label>
                                <input type="password" class="form-control" id="inputV_Password"
                                    name="password_confirmation">
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>


@endsection
