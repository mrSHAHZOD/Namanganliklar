
@extends('layouts.main')

@section('content')
    {{-- newsc start --}}

    @include('sections.news')
    {{-- news end --}}


    {{-- popular news --}}
    @include('sections.p_news')
    </div>
    </div>
    </section>
    {{-- popular news end --}}


    </main>
@endsection
