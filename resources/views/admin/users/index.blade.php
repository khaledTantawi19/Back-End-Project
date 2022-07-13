@extends('admin.layout.main')

@section('title', 'Users')

@section('content')



    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <h2>Users
                    <a class="float-right h6 btn btn-primary btn-sm" href="{{ route('user.create') }}"> Add User</a>
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                                <tr>
                                    <td class="font-weight-bold">{{ $user->id }}</td>
                                    <td class="font-weight-bold">{{ $user->name }}</td>
                                    <td class="font-weight-bold">{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('user.show', $user->id) }}"
                                            class="btn btn-outline-primary btn-sm">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-outline-info btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        {{-- <a href="{{route('user.destroy', $user->id)}}"
                                    class="btn btn-danger btn-sm sa-btn-delete">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a> --}}
                                        <form action="{{route('user.destroy', $user->id)}}" method="post" class="d-inline">
                                            @csrf
                                            <input type="hidden" value="delete" name="_method">
                                            <button class="btn btn-danger btn-sm sa-btn-delete"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>

    <script src="https://kit.fontawesome.com/b1f5ce348e.js" crossorigin="anonymous"></script>
@endsection
