

        @foreach ($posts as $item)

        <li class="posts__item">
            <a href="{{ route('article', $item->id) }}">
              <img width="40px" height="300px"  src="/images/{{ $item->img }}" alt="Image" class="posts__img">
              <h2 class="posts__title">{{ $item['body_uz'] }}</h2>
              <span class="posts__date">{{ $item->created_at }}</span>
            </a>
          </li>


   {{--      <li class="posts__item">
            <a href="{{ route('category', $item->id) }}">
                <img width="40px" height="300px" src="/images/{{ $item->img }}" alt="Image"
                    class="posts__img">
                <h2 class="posts__title"> {{ $item['short_content_uz'] }}
                </h2>
                <span class="posts__date">{{ $item->created_at }}</span>
            </a>
        </li> --}}
        @endforeach




