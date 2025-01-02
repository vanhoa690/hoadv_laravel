<div class="col-lg-4 col-md-6 col-sm-6">
    <a href="{{ route('movies.show', $movie) }}">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="{{ $movie->thumbnail }}">
                <div class="ep">{{ $movie->episodes_count }} / {{ $movie->episodes_count }}</div>
                <div class="comment"><i class="fa fa-comments"></i> {{ $movie->comments }}</div>
                <div class="view"><i class="fa fa-eye"></i> {{ $movie->views }}</div>
            </div>
            <div class="product__item__text">
                <ul>
                    <li>Active</li>
                    <li>Movie</li>
                </ul>
                <h5>{{ $movie->title }}</h5>
            </div>
        </div>
    </a>
</div>
