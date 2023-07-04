@extends('admin.layouts.main')

@section('news')
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
                <a href="{{ route('admin.news.index') }}">
                    <button type="button" class="btn btn-outline-dark m-2">Qaytish</button>
                </a>
            </div>

            <form class="create__inputs" action="{{ route('admin.news.update', $news->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <strong> news uz:</strong>
                <input type="text" name="title_uz" value="{{ $news->title_uz }}" class="form-control"> <br>
                @error('title_uz')
                    {{ $message }}
                @enderror

                <strong> news uz:</strong>
                <input type="text" name="title_ru" value="{{ $news->title_ru }}" class="form-control"> <br>
                @error('title_ru')
                    {{ $message }}
                @enderror

                <strong> news uz:</strong>
                <input type="text" name="short_content_uz" value="{{ $news->short_content_uz }}" class="form-control"> <br>
                @error('short_content_uz')
                    {{ $message }}
                @enderror

                <strong> news uz:</strong>
                <input type="text" name="short_content_ru" value="{{ $news->short_content_ru }}" class="form-control"> <br>
                @error('short_content_ru')
                    {{ $message }}
                @enderror

                <strong> news ru:</strong>
                <input type="data" name="name_ru" value="{{ $news->data }}" class="form-control"> <br>
                @error('data')
                    {{ $message }}
                @enderror

                <input type="submit" value="O'zgartirish">

            </form>
        </div>
    </div>
    <!-- MAIN -->
@endsection
