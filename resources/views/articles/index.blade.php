@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <span class="display-5">Articles</span>
                        <a href="#" class="btn btn-primary float-right">New Category</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">user_id</th>
                                <th scope="col">category_id</th>
                                <th>title</th>
                                <th>description</th>
                            </tr>
                            </thead>


                        </table>
                </div>
            </div>
        </div>
@endsection
