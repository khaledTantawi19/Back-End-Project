@extends('admin.layout.main')

@section('title', 'Show Blog')


@section('content')

<div class="container-fluid">
    <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <h2>Blogs
            </h2>
            <img style="max-width: 100% ; min-width: 100%" src="{{ url('storage/' . $blog_show->image) }}" alt="">
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Price Of Car</th>
                            <th>User Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="font-weight-bold">{{ $blog_show->id }}</td>
                            <td class="font-weight-bold">{{ $blog_show->title }}</td>
                            <td class="font-weight-bold">{{ $blog_show->content }}</td>
                            <td class="font-weight-bold">{{ $blog_show->price }}</td>
                            <td class="font-weight-bold">{{ $blog_show->user->name }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
</div>



@endsection
