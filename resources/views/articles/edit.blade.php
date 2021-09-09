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
                                <label for="title">{{ __('title') }}</label>
                                <input id="name" type="text" class="form-control @error('title') is-invalid @enderror"
                                       name="title" value="{{ old('title',$article->title) }}">
                                @error('title')
                                <span class="text-danger" role="alert">{{ $message }}</span>
                                @enderror
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
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                          rows="5">{{ old('description',$article->description) }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <lable for="image">image</lable>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
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
