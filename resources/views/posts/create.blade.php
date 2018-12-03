@extends('layouts.app')

@section('content')
    {{--<form action="{{ url('/posts') }}" method="post">--}}
    <div>
        {{Form::open(array('url' => '/posts','class' => 'align-self-center', 'method' => 'post'))}}
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <label for="inputTitle">Title</label>
            <input type="text" class="form-control" name="title" id="inputTitle" aria-describedby="emailHelp" placeholder="Enter title" required>
        </div>
        <div class="form-group">
            <label for="inputContent">Content</label>
            <input type="text" class="form-control" name="content" id="inputContent" placeholder="Enter Content" required><br/>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
        <a href="/posts" class="btn btn-dark">Back</a>
        {{Form::close()}}
    </div>

@stop

