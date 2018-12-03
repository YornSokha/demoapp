@extends('layouts.app')


@section('content')


    <div>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a href="posts/create" class="btn btn-success">Add New</a>
            {{Form::open(array('url' => '/posts/','class' =>'form-inline', 'method' => 'get'))}}
                <input class="form-control mr-sm-2" name="search" value="{{request('search')}}" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            {{Form::close()}}
        </nav>
    </div>
    <div class="justify-content-md-center">
        @if(count($posts) > 0)
            <table  class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col col-md-2" scope="col">Title</th>
                    <th class="col col-md-auto" scope="col">Content</th>
                    <th class="col col-md-2" scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                    {{--{{dd($posts)}}--}}

                    @foreach($posts as $i => $post)
                        <tr>
                            <td>{{(($posts->currentPage() - 1) * 10) + ++$i}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->content}}</td>
                            <td class="form-inline ">
                                <a href="{{url('/posts/' .$post->id .'/edit')}}" class="btn btn-primary mr-md-2">Edit</a>
                                {{Form::open(array('url' => '/posts/' .$post->id,'class' =>'form-inline', 'method' => 'delete'))}}
                                <span class="btn btn-danger" id="btn-delete" >Delete</span>
                                {{Form::close()}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <h1 class="alert alert-dismissible alert-danger">No data...</h1>
        @endif
    </div>
    <div class="justify-content-md-center">
        <div class="col-md-12 align-center-custom">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

@section('footer')
    {{--<script--}}
            {{--src="http://code.jquery.com/jquery-2.2.4.js"--}}
            {{--integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="--}}
            {{--crossorigin="anonymous"></script>--}}


    {{--<script src="sweetalert2.all.min.js"></script>--}}
    {{--<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->--}}
    {{--<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>--}}

@stop