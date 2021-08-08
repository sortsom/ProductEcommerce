@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                       add categorys
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{('New Categories')}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                    <div class="card-body">
                                        <form method="POST" action="#">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="name" autofocus>

                                                    @error('id')
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                 </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                                 </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                                                <div class="col-md-6">
                                                    <input id="text" type="text" class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="Price">

                                                    @error('price')
                                                    <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                                 </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('subtitle') }}</label>

                                                <div class="col-md-6">
                                                    <input id="text" type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" required autocomplete="subtitle">

                                                    @error('subtitle')
                                                    <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                                 </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="message-text" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                                <div class="col-md-6">
                                                    <textarea class="form-control" id="message-text"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-md-4 col-form-label text-md-right">{{ __('images') }}</label>
                                                <div class="col-md-6">
                                                    <div class="variants">
                                                        <div class='file'>
                                                            <label for='input-file'>
                                                                <i class="fa fa-cloud" aria-hidden="true"></i>
                                                                Select a file
                                                            </label>
                                                            <input id='input-file' type='file'/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save Add</button>
                                            </div>

                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">image</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">subtitle</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">bsr1992</th>
                                <td>Photo.jpg</td>
                                <td>Sort som</td>
                                <td>$34</td>
                                <td>Hello for Dec20</td>
                                <td>Promotion 23%</td>
                                <td>
                                    <button class="btn btn-outline-success">Edit</button>
                                    <button class="btn btn-outline-danger">delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
