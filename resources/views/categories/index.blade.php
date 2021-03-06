@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span class="display-5">All Categories</span>
                        <a href="{{route('categories.create',)}}" class="btn btn-primary float-right">New Category</a>
                        <div class="clearfix"></div>
                        @if($message = Session::get('success'))
                            <div class="alert alert-success m-2 alert-dismissible fade show p-3" role="alert">
                                {{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->name}}</td>
                                    <td>

                                        <a  href="{{route('categories.edit',$category->id)}}" class="btn btn-outline-success">Edit</a>
{{--                                        <form method="POST" action="{{route('categories.delete',$category->id)}}">--}}
{{--                                            @csrf--}}
{{--                                            @method--}}

{{--                                        <a href="{{route('categories.show',$category->id)}}"--}}
{{--                                           class="btn btn-outline-primary">Show</a>--}}
{{--                                        <a href="{{route('categories.edit',$category->id)}}"--}}
{{--                                           class="btn btn-outline-success">Edit</a>--}}
{{--                                        </form>--}}
                                        <form method="POST" action="{{route('categories.destroy',$category->id)}}"
                                              class="d-inline-flex">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger">delete</button>

                                        </form>
                                    </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
