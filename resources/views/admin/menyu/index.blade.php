@extends('admin.layouts.main')
@section('content')


@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    @if ($message = Session::get('danger'))
                        <div class="alert alert-danger">
                            <p>{{ $message }}</p>
                        </div>
                    @endif



                    <div class="card">
                        <div class="card-header">
                            <h4>Maqolalar</h4>
                            <a href="{{ route('menyu.create') }}" class="btn btn-primary"
                                style="position:absolute; right:50;">Create</a>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                #
                                            </th>
                                            <th>img </th>
                                            <th>title UZ</th>
                                            <th>title RU</th>
                                            <th>short content Uz</th>
                                            <th>short content RU</th>
                                            <th>Data</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($menyus) == 0)
                                            <tr>
                                                <td colspan="5" class="h5 text-center text-muted">Ma'lumot qo'shilmagan
                                                </td>
                                            </tr>
                                        @endif

                                        @foreach ($menyus as $menyu)
                                            <tr>
                                                <td>
                                                    {{ ++$loop->index }}
                                                </td>
                                                <td>{{ $menyu->img }}</td>
                                                <td>{{ $menyu->title_uz }}</td>
                                                <td>{{ $menyu->title_ru }}</td>
                                                <td>{{ $menyu->short_content_uz }}</td>
                                                <td>{{ $menyu->short_content_ru }}</td>
                                                <td>{{ $menyu->data }}</td>
                                                <td>
                                                    <form action="{{ route('posts.destroy', $menyu->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <a href="{{ route('posts.show', $menyu->id) }}" class="btn btn-info">
                                                            <ion-icon class="fas fa-info-circle"></ion-icon>
                                                        </a>
                                                        <a href="{{ route('posts.edit', $menyu->id) }}" class="btn btn-primary">
                                                            <ion-icon class="far fa-edit"></ion-icon>
                                                        </a>
                                                        <button class="btn btn-danger"
                                                            onclick="return confirm('Rostdan o`chirmoqchimisiz ?')">
                                                            <ion-icon class="fas fa-times"></ion-icon>
                                                        </button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                        g
                                    </tbody>
                                </table>
                                {{--      {{ $menyu->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
