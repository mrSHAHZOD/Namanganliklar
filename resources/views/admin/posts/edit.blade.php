@extends('admin.layouts.main')

@section('posts')
    active
@endsection

@section('content')

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
    <!-- MAIN -->

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>O'zgartirish</h3>
                <a href="{{ route('admin.posts.index') }}">
                    <button type="button" class="btn btn-outline-dark m-2">Qaytish</button>
                </a>
            </div>

            <form class="create__inputs" action="{{ route('admin.posts.update', $post->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <strong> post uz:</strong>
                <input type="text" name="title_uz" value="{{ $post->title_uz }}" class="form-control"> <br>
                @error('title_uz')
                    {{ $message }}
                @enderror

                <strong> post uz:</strong>
                <input type="text" name="title_ru" value="{{ $post->title_ru }}" class="form-control"> <br>
                @error('title_ru')
                    {{ $message }}
                @enderror

                <strong> post uz:</strong>
                <input type="text" name="img" value="{{ $post->img }}" class="form-control"> <br>
                @error('img')
                    {{ $message }}
                @enderror

                <strong> post uz:</strong>
                <input type="text" name="category_id" value="{{ $post->category_id }}" class="form-control"> <br>
                @error('category_id')
                    {{ $message }}
                @enderror

                <strong> post uz:</strong>
                <input type="text" name="body_uz" value="{{ $post->body_uz }}" class="form-control"> <br>
                @error('body_uz')
                    {{ $message }}
                @enderror

                <strong> post ru:</strong>
                <input type="text" name="body_ru" value="{{ $post->body_ru }}" class="form-control"> <br>
                @error('body_ru')
                    {{ $message }}
                @enderror


                <strong> post ru:</strong>
                <input type="text" name="views" value="{{ $post->views }}" class="form-control"> <br>
                @error('views')
                    {{ $message }}
                @enderror


                <input type="submit" value="O'zgartirish">

            </form>
        </div>
    </div>
    <!-- MAIN -->
@endsection
