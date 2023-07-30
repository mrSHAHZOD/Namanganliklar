<section class="news">
    <div class="container">
        <div class="news__wrapper basic-flex">
            <div class="column-news">
                <h2 class="news__title">Последние новости news</h2>
                <ul class="news__list basic-flex">

                    @foreach ($latest_news as $item)
                    <li class="news__item">
                        <a href="{{ route('article', $item->id) }}" class="basic-flex news__link">
                            <div class="news-image-wrapper"><img src="/images/{{ $item->img }}" alt="Bottom Img"></div>
                            <div class="news-box basic-flex">
                                <h4 class="news__title">{{ $item['title_uz' ] }}</h4>
                                <p class="news__description">{{ $item['body_uz' ] }}
                                </p>
                                <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                            </div>
                        </a>
                    </li>
                @endforeach
                    <li class="news__item">
                        <a href="#" class="basic-flex news__link">
                            <div class="news-image-wrapper"><img src="/assets/img/bottom3.png" alt="Bottom Img"></div>
                            <div class="news-box basic-flex">
                                <h4 class="news__title">В Ташкенте планируют ввести новую систему электронных проездных
                                    билетов
                                </h4>
                                <p class="news__description">Целью этих изменений является максимально возможное
                                    сокращение количества других маршрутов на улицах, где проходят основные маршруты.
                                </p>
                                <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <button type="button" class="btn load-more-btn">Больше новостей</button>
            </div>
