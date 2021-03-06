    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="display-5">All Articles</span>
                            <a href="{{route('articles.create')}}" class="btn btn-primary float-right">New Articles</a>
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
                            <table class="table table-bordered" >
                                <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th>image</th>
                                    <th scope="col">user</th>
                                    <th scope="col">category</th>
                                    <th scope="col">title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">created at</th>
                                    <th scope="col">action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($articles as $article)

                                    <tr>
                                        <th scope="10%">{{ ++$loop->index }}</th>
                                        <th >
                                            @if(!empty(trim($article->image)))

                                                <img style="height: 45px; width: 45px; border-radius: 50%" src={{ asset('image/' . $article->image) }}>
                                            @else
                                                    <img style="height: 45px; width: 45px; border-radius: 50%" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/495px-No-Image-Placeholder.svg.png">
                                            @endif
                                        </th>
                                        <th scope="10%">{{$article->user->name ??'unknown'}}</th>
                                        <th scope="10%">{{$article->category->name ??'unknown'}}</th>
                                        <th scope="30%">{{ \Illuminate\Support\Str::limit($article->title, 10)}}</th>
                                        <th scope="40%"> {{ \Illuminate\Support\Str::limit($article->description, 50) }}</th>
                                        <th scope="30%">{{ $article->created_at->format('d-m-Y') }}</th>
                                        <td class="d-flex">
                                            <a href="{{route('articles.edit',$article->id)}}" class="btn btn-outline-success">Edit</a>
                                            <form method="POST" action="{{route('articles.destroy',$article->id)}}" class="d-inline-flex">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            No data to be displayed
                                        </td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>

                        </div>
                        <div class="d-flex justify-content-center">
                            {{$articles->links('pagination::bootstrap-4')}}
                        </div>
                    </div>

                </div>

            </div>
    @endsection
