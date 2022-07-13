@extends('admin.layout.main')

@section('title', 'show user')



@section('content')

    <div class="container-fluid">
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h2>Show User
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Age</th>
                                <th>Admin Or User</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Blogs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="font-weight-bold">{{ $user->id }}</td>
                                <td class="font-weight-bold">{{ $user->name }}</td>
                                <td class="font-weight-bold">{{ $user->email }}</td>
                                <td class="font-weight-bold">{{ $user->age }}</td>
                                <td class="font-weight-bold">
                                    @if ($user->select == 1)
                                        {{ $selector = 'Admin' }}
                                    @elseif($user->select == 0)
                                        {{ $selector = 'User' }}
                                    @else
                                        {{ $selector = 'Moderator' }}
                                    @endif
                                </td>
                                <td class="font-weight-bold">{{ $user->created_at }}</td>
                                <td class="font-weight-bold">{{ $user->updated_at }}</td>
                                <td class="font-weight-bold">
                                    @foreach ($blogs as $blog)
                                        {{ $blog->title . ',' }}
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </main>
        </div>
    </div>
@endsection
