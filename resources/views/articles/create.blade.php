@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Add New Article</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="title" value="{{ old('title') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control" id="category_id">
                                    <option value="">---Select Category---</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <lable for="image">image</lable>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <a href="{{route('categories.index')}}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Save Add</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
