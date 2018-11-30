@extends('layouts.app')


@section('content')


    <div>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a href="posts/create" class="btn btn-success">Add New</a>
            {{--<form class="form-inline">--}}
                {{--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
                {{--{{Form::open(array('url' => '/posts/' .$post->id,'class' =>'form-inline', 'method' => 'get'))}}--}}
                    {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
                {{--{{Form::close()}}--}}
            {{--</form>--}}
        </nav>
    </div>
    <div class="justify-content-md-center">
        <table  class="table table-success">
            <thead>
            <tr>
                <th class="col col-md-2">Title</th>
                <th class="col col-md-auto">Content</th>
                <th class="col col-md-2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($posts as $post)

                <tr>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td class="form-inline ">
                        <a href="{{url('/posts/' .$post->id .'/edit')}}" class="btn btn-success mr-md-2">Edit</a>
                        {{Form::open(array('url' => '/posts/' .$post->id,'class' =>'form-inline', 'method' => 'delete'))}}
                        <span class="btn btn-danger" id="btn-submit" >Delete</span>
                        {{Form::close()}}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
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