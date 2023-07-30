<ul class="navbar__menu basic-flex">
    <li class="menu__item"><a href="/">Bosh sahifa</a></li>
    @foreach ($category as $item)

    <li class="menu__item"><a href="{{ route('posts',$item['id']) }}">{{ $item['name_uz'] }}</a></li>

    @endforeach


    <li class="menu__item"><a href="/contact">Aloqa</a></li>

{{--     <li class="menu__item"><a href="/">Узбекистана</a></li>
    <li class="menu__item"><a href="/article">Мир</a></li>
    <li class="menu__item"><a href="/contact">Экономика</a></li>
    <li class="menu__item"><a href="/index">Политика</a></li>
    <li class="menu__item"><a href="/list">Общество</a></li>
    <li class="menu__item"><a href="#">Технологии</a></li>
    <li class="menu__item"><a href="#">Спорт</a></li>
    <li class="menu__item"><a href="#">Культура</a></li>
    <li class="menu__item"><a href="#">Происшествия</a></li>
    <li class="menu__item"><a href="#">Туризм</a></li> --}}
  </ul>
