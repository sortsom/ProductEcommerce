@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Edit Category</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('articles.update',$articles->id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="email">{{ __('user') }}</label>
                                <input id="name" type="text" class="form-control" value="{{ old('user',$articles->user->name ) }}">
                            </div>
                            <div class="form-group">
                                <label for="category">{{__('category')}}</label>
                                <input type="text" id="category" class="form-control" value="{{ old('category',$articles->category->name ) }}">
                            </div>
                            <div class="form-group">
                                <lable for="title">{{__('title')}}</lable>
                                <input type="text" id="title" class="form-control" value="{{ old('title',$articles->title ) }}">
                            </div>
                            <div class="form-group">
                                <lable for="description">{{__('description')}}</lable>
                                <input type="text" id="description" class="form-control" value="{{ old('description',$articles->description) }}">
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
