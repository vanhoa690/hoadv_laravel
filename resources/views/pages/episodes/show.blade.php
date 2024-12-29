<x-layout>
    <div class="page-inner">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="page-header">
            <h3 class="fw-bold mb-3">Episode Detail</h3>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ route('episodes.create') }}">
                        <button class="btn btn-secondary">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Add Episode
                        </button>
                    </a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Link</th>
                            <th scope="col">View</th>
                            <th scope="col">Movie</th>
                            <th scope="col">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $episode->id }}</td>
                            <td>{{ $episode->title }}</td>
                            <td>{{ $episode->link }}</td>
                            <td>{{ $episode->view }} views</td>
                            <td>
                                <a href="{{ route('movies.index', ['movie_id' => $episode->movie->id]) }}">
                                    {{ $episode->movie->title }}</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-icon btn-round btn-success">
                                    <i class="fa fa-check"></i>
                                </button>
                            </td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
