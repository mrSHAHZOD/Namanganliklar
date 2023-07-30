@extends('admin.layouts.main')

@section('posts')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.posts.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td>posts uz: </td>
                    <td><b>{{ $posts->title_uz }}</b></td>
                </tr>

                <tr>
                    <td>posts ru: </td>
                    <td><b>{{ $posts->title_ru }}</b></td>
                </tr>
                <tr>
                    <td>IMG: </td>
                    <td><b>{{ $posts->img }}</b></td>
                </tr>
                <tr>
                    <td> catgory: </td>
                    <td><b>{{ $posts->category_id }}</b></td>
                </tr>
                <tr>
                    <td>posts ru: </td>
                    <td><b>{{ $posts->body_uz }}</b></td>
                </tr>
                <tr>
                    <td> body uz: </td>
                    <td><b>{{ $posts->body_uz }}</b></td>
                </tr>
                <tr>
                    <td>body ru: </td>
                    <td><b>{{ $posts->views }}</b></td>
                </tr>
                <tr>
                    <td>tags </td>
                    <td><b>
                        @foreach ($posts->tags as $tag)
                        {{ $tag->name_uz }} <br>
                        @endforeach
                    </b></td>
                </tr>
            </thead>
        </table>

    </div>
@endsection
