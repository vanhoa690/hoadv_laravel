<x-layout>
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Episode</h3>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="POST" action="{{ route('episodes.index') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group form-inline @error('title') has-error @enderror">
                                <label for="title" class="col-md-3 col-form-label">Title</label>
                                <div class="col-md-9 p-0">
                                    <input type="text" class="form-control input-full" id="title" name="title"
                                        placeholder="Enter Title" />
                                </div>
                                @error('title')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group form-inline @error('link') has-error @enderror">
                                <label for="link" class="col-md-3 col-form-label">Link</label>
                                <div class="col-md-9 p-0">
                                    <input type="text" class="form-control input-full" id="link" name="link"
                                        placeholder="Enter Link" />
                                </div>
                                @error('link')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group form-inline @error('view') has-error @enderror">
                                <label for="view" class="col-md-3 col-form-label">View</label>
                                <div class="col-md-9 p-0">
                                    <input type="number" class="form-control input-full" id="view" name="view"
                                        placeholder="Enter View" />
                                </div>
                                @error('view')
                                    <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="movie">Movie</label>
                                <select class="form-select form-control" id="movie" name="movie_id">
                                    @foreach ($movies as $movie)
                                        <option value="{{ $movie->id }}"
                                            @if (isset($movie_query)) {{ old('movie_id', $movie_query->id) == $movie->id ? 'selected' : '' }} @endif>
                                            {{ $movie->title }}</option>
                                    @endforeach
                                </select>
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
