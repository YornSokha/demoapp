@extends('layouts.app')

@section('header')
    <h1>{{$title}}</h1>
@stop


@section('content')
    <div>
        {{ Form::open(array('url' => '/posts/' .$post->id, 'class' => 'align-self-center','method' => 'put'))}}
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="form-group">
            <label for="inputTitle">Title</label>
            <input type="text" class="form-control" name="title" id="inputTitle" value="{{$post->title}}" aria-describedby="emailHelp" placeholder="Enter title" required>
        </div>
        <div class="form-group">
            <label for="inputContent">Content</label>
            <input type="text" class="form-control" name="content" id="inputContent" value="{{$post->content}}" placeholder="Enter Content" required><br/>
        </div>
        <span class="btn btn-info" id="btn-update">Update</span>
        {{--<button type="submit" class="btn btn-info" onclick="updatedAlert()">Update</button>--}}
        <a href="/posts" class="btn btn-dark">Back</a>
        {{ Form::close() }}
    </div>

@stop

@section('footer')
    <script> function updatedAlert() {
            alert("Record has been updated.");
        }</script>
@stop