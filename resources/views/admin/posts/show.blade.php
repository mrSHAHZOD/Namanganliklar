@extends('admin.layouts.main')

@section('news')
    active
@endsection

@section('content')
    <div class="col-sm-12 col-xl-12">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Show product</h6>
            <a href="{{ route('admin.news.index') }}">
                <button type="button" class="btn btn-primary"> <i class="fas fa-home"></i></button>
            </a>
        </div>

        <table class="table table-striped" id="table-1">
            <thead>
                <tr>
                    <td>news uz: </td>
                    <td><b>{{ $news->title_uz }}</b></td>
                </tr>

                <tr>
                    <td>news ru: </td>
                    <td><b>{{ $news->title_ru }}</b></td>
                </tr>
                <tr>
                    <td>news ru: </td>
                    <td><b>{{ $news->short_content_uz }}</b></td>
                </tr>
                <tr>
                    <td>news ru: </td>
                    <td><b>{{ $news->short_content_ru }}</b></td>
                </tr>
                <tr>
                    <td>news ru: </td>
                    <td><b>{{ $news->data }}</b></td>
                </tr>
            </thead>
        </table>

    </div>
@endsection
