@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span class="display-5">All Articles</span>
                        <a href="{{route('articles.create')}}" class="btn btn-primary float-right">New Articles</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">user</th>
                                <th scope="col">category</th>
                                <th scope="col">title</th>
                                <th scope="col">Description</th>
                                <th scope="col">created at</th>
                                <th scope="col">action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="10%">TSR00012</th>
                                <th scope="10%">1</th>
                                <th scope="10%">2</th>
                                <th scope="30%">Phones</th>
                                <th scope="40%">Lorem ipsum dolor adipisicing elit. Aut autem commodi culpa</th>
                                <th scope="30%">12:00PM</th>
                                <td>
                                    <a href="#" class="btn btn-outline-success">Edit</a>
                                    <form method="POST" action="" class="d-inline-flex">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">delete</button>

                                    </form>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
