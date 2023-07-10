@extends('admin.layouts.main')

@section('posts')
    active
@endsection

@section('content')

    <div class="col-sm-12 col-xl-12">

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

        <div class="col-sm-12 col-sm-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Ma'lumot qo`shish</h6>
                <div class="bg-light rounded h-100 p-4">
                    <form action="{{ route('admin.posts.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">posts Uz</label>
                            <input type="text" name="title_uz" value="{{ old('title_uz') }}" class="form-control">
                            @error('title_uz')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">posts Uz   </label>
                            <input type="text" name="title_ru" value="{{ old('title_ru') }}" class="form-control">
                            @error('title_ru')
                                {{ $message }}
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label class="form-label">posts Uz</label>
                            <input type="file" name="img" value="{{ old('img') }}" class="form-img">
                            @error('img')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">posts Uz</label>
                            <input type="text" name="category_id" value="{{ old('category_id') }}" class="form-control">
                            @error('category_id')
                                {{ $message }}
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">posts Uz</label>
                            <input type="text" name="body_uz" value="{{ old('body_uz') }}" class="form-control">
                            @error('body_uz')
                                {{ $message }}
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">posts Uz</label>
                            <input type="text" name="body_ru" value="{{ old('body_ru') }}" class="form-control">
                            @error('body_ru')
                                {{ $message }}
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label">posts Uz</label>
                            <input type="text" name="views" value="{{ old('views') }}" class="form-control">
                            @error('views')
                                {{ $message }}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Qo`shish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
