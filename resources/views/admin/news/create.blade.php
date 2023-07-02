{{-- @extends('admin.layouts.main') --}}

@section('news')
    active
@endsection
{{--
@section('content') --}}


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

<section class="section">
    <div class="section-body">

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Post qo'shish</h4>
            </div>
            <div class="card-body">
              <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Post Nomi Uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title_uz" value="{{ old('title_uz') }}">
                   @error('title_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Post Nomi RU</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="title_ru" value="{{ old('title_ru') }}">
                   @error('title_ru') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">short_content_uz</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="short_content_uz" value="{{ old('short_content_uz') }}">
                   @error('short_content_uz') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">short_content_ru</label>
                <div class="col-sm-12 col-md-7">
                  <input type="text" class="form-control" name="short_content_ru" value="{{ old('short_content_ru') }}">
                   @error('short_content_ru') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">time</label>
                <div class="col-sm-12 col-md-7">
                  <input type="date" class="form-control" name="data" value="{{ old('data') }}">
                   @error('data') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
              </div>
{{--
              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategoriyasi</label>
                <div class="col-sm-12 col-md-7">

                </div>
            </div> --}}

              <div class="form-group row mb-4">
                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                <div class="col-sm-12 col-md-7">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

{{-- @endsection --}}
