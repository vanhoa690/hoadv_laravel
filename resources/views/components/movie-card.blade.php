<div class="col-lg-4 col-md-6 col-sm-6">
    <div class="product__item">
        <div class="product__item__pic set-bg" data-setbg="{{ $movie->thumbnail }}">
            <div class="ep">{{ $movie['ep'] }} / 18</div>
            <div class="comment"><i class="fa fa-comments"></i> {{ $movie->comments }}</div>
            <div class="view"><i class="fa fa-eye"></i> {{ $movie->views }}</div>
        </div>
        <div class="product__item__text">
            <ul>
                <li>Active</li>
                <li>Movie</li>
            </ul>
            <h5><a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a></h5>
        </div>
    </div>
</div>
