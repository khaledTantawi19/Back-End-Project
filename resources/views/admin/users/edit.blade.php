@extends('admin.layout.main')

@section('title', 'Edit User')

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
                <h2>Update User</h2>
                <div class="card col-md-10">
                    <div class="card-body ">
                        <form class="row g-3" method="POST" action="{{ route('user.update', $user->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="col-md-6">
                                <label for="inputName4" class="form-label">Name</label>
                                <input type="text" class="form-control" id="inputName4" name="name"
                                    value="{{ old('name') ?? $user->name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email"
                                    value="{{ old('email') ?? $user->email }}">
                            </div>
                            <div class="col-6">
                                <label for="inputV_age" class="form-label">Age</label>
                                <input type="number" class="form-control" id="inputV_age" name="age"
                                    value="{{ old('age') ?? $user->age }}">
                            </div>
                            <div class="col-6">
                                <label for="inputPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword" name="password"
                                    value="{{ old('password') ?? $user->password }}">
                            </div>
                            <div class="col-6">
                                <label for="admin">Select admin or user</label>
                                <select name="select" id="admin" class="form-control">
                                    <option value="{{ $user->select }}">
                                        @if ($user->select == 1)
                                            {{ 'Admin' }}
                                        @else
                                            {{ 'User' }}
                                        @endif
                                    </option>
                                    <option value=" {{ $user->select = $user->select == 1 ? 0 : 1 }}">
                                        @if ($user->select == 0)
                                            {{ 'User' }}
                                        @else
                                            {{ 'Admin' }}
                                        @endif
                                    </option>
                                    <option value="@if ($user->select !== 1 || $user->select !== 0) {{ 2 }} @endif">
                                        @if ($user->select !== 1 || $user->select !== 0)
                                            {{ 'Moderator' }}
                                        @endif
                                    </option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="inputV_Password" class="form-label">Password Confirmation</label>
                                <input type="password" class="form-control" id="inputV_Password"
                                    name="password_confirmation" value="{{ old('password') ?? $user->password }}">
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
