@extends('UserViwes.layout.usermain')

@section('title', 'Show My Ads')


@section('content')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success mt-5">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <h2>My Ads
                    <a class="float-end h3 text-decoration-none" href="{{ route('create.user.blogs') }}">Add Ad</a>
                </h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Price Of Car</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blog_show as $blog_show)
                                <tr>
                                    <td class="font-weight-bold">{{ $blog_show->id }}</td>
                                    <td class="font-weight-bold">{{ $blog_show->title }}</td>
                                    <td class="font-weight-bold">{{ $blog_show->content }}</td>
                                    <td class="font-weight-bold">{{ $blog_show->price }}</td>
                                    <td><img style="max-width: 70% ; min-width: 70%"
                                            src="{{ url('../storage/' . $blog_show->image) }}" alt=""></td>
                                    <td><a href="{{ route('user.blog.edit', $blog_show->id) }}"
                                            class="btn btn-outline-info btn-sm">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                        <form action="{{ route('user.blog.destroy', $blog_show->id) }}" method="post"
                                            class="d-inline">
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



@endsection
