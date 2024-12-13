<x-layout>
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Movie</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="{{ route('movies.update', $movie) }}">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group form-inline">
                                <label for="title" class="col-md-3 col-form-label">Title</label>
                                <div class="col-md-9 p-0">
                                    <input type="text" class="form-control input-full" id="title" name="title"
                                        value='{{ $movie->title }}' placeholder="Enter Title" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-select form-control" id="category" name="category_id">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id', $movie->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Genres</label>
                                <div class="selectgroup selectgroup-pills">
                                    @foreach ($genres as $genre)
                                        <label class="selectgroup-item">
                                            <input type="checkbox" name="genre_id" value="{{ $genre->id }}"
                                                class="selectgroup-input"
                                                {{ old('genre_id', $movie->genre_id) == $genre->id ? 'checked' : '' }} />
                                            <span class="selectgroup-button">{{ $genre->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
