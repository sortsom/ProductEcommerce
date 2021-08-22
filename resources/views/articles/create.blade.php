@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Add New Category</div>
                    <div class="card-body">
                        <form method="POST" action="#">
                            @csrf
                            <div class="form-group">
                                <label for="email">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                       name="name" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">{{ $message }}</span>
                                @enderror
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
