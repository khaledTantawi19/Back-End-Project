@extends('admin.layout.main')

@section('title', 'Edit Blog')


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
                <h2>Edit Blog</h2>
                <div class="card col-md-10">
                    <div class="card-body ">
                        <form class="row g-3" method="POST" action="{{ route('blog.update', $blog_edits->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="_method" value="put">
                            <div class="col-md-6">
                                <label for="inputTitle4" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputTitle4" name="title"
                                    value="{{ old('title') ?? $blog_edits->title }}">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPrice" class="form-label">Price</label>
                                <input type="text" class="form-control" id="inputPirce" name="price"
                                    value="{{ old('price') ?? $blog_edits->price }}">
                            </div>
                            <div class="col-12">
                                <label for="inputContent4" class="form-label">Content</label>
                                <textarea class="form-control" name="content" id="inputContent4" cols="30" rows="10">{{ old('title') ?? $blog_edits->content }}</textarea>
                                <!-- <input type="text" id="inputContent4" name="content"> -->
                            </div>
                            <div class="col-6">
                                <input type="hidden" name="user_id" value="{{ $user }}">
                            </div>
                            <div class="col-6">
                                <label for="inputImage" class="form-label">Image</label>
                                <input type="file" class="form-control" id="inpuImage" name="image">
                                <img style="width: 400px" src="{{ url('storage/' . $blog_edits->image) }}" alt=""
                                    srcset="">
                            </div>


                            <div class=" col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </main>
        </div>
    </div>



@endsection
