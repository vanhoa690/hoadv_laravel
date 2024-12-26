<x-layout>
    <div class="page-inner">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="page-header">
            <h3 class="fw-bold mb-3">Episode List</h3>
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
                            <th scope="col">Movie</th>
                            <th scope="col">Active</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($episodes as $episode)
                            <tr>
                                <td>{{ $episode->id }}</td>
                                <td>{{ $episode->title }}</td>
                                <td>{{ $episode->link }}</td>
                                <td>{{ $episode->movie->title }}</td>
                                <td>
                                    <button type="button" class="btn btn-icon btn-round btn-success">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </td>
                                <td>
                                    <form action="{{ route('episodes.destroy', $episode->id) }}" method="POST">
                                        <a href="{{ route('episodes.edit', $episode) }}"
                                            class="btn btn-primary text-white ml-3">Edit</a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Sure Want Delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
