@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Show Category</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="email">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control"
                                   name="name" value="{{ old('name',$category->name) }}">
                        </div>
                        <div class="modal-footer">
                            <a href="{{route('categories.index')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
