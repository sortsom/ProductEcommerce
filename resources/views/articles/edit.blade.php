@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Edit Category</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('articles.update',$article->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="email">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="title" value="{{ old('title',$article->title) }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control" id="category_id">
                                    <option value="">---Select Category---</option>
                                    @foreach($categories as $category)
                                        <option
                                            {{$article->category_id === $category->id ? 'selected' : ''}} value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" id="description"
                                          rows="5">{{ old('description',$article->description) }}</textarea>
                            </div>
                            <div class="form-group">
                                <lable for="image">image</lable>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <a href="{{route('articles.index')}}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
