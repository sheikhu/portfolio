@extends('layout')

@section('container')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 class="post-title">
            {{ $post->title }}
        </h1>
        <p class="tags">
            <span class="glyphicon glyphicon-tags"></span>
            Tags : <span class="label label-success">Label</span>
        </p>
        <p class="post-content">
            {{ $post->content }}
        </p>
    </div>
</div>
@stop
