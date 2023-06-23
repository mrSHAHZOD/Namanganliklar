@extends('layouts.main')

@section('content')



<section class="article">

 {{-- content start --}}

@include('sections.content')

 {{-- content end --}}

 {{-- papuliar news start --}}

@include('sections.p_news')

 {{-- papuliar news end --}}
            <div class="related-news">
                <h3 class="related-news__title">Новости по теме
                </h3>
                {{-- postlar soni 3 ta bolishi kerak --}}
                @include('sections.posts')
                
            </div>
        </div>
    </div>
</section>

</main>

@endsection
