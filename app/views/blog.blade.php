@extends('layout')


@section('self') @stop
@section('container')
<div class="row">
    <div class="box">
        <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">
                <strong>Articles</strong>
            </h2>
            <hr>
        </div>

        @foreach ($posts as $p)
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h3>
                <a class="post-title" href="{{ route('post.show', $p->slug) }}">
                    {{ $p->title }}
                </a>
                <small>-
                <span class="glyphicon glyphicon-calendar"></span> {{ $p->created_at->format('d m, Y') }}
                </small>
            </h3>
            <p class="tags">
                <span class="glyphicon glyphicon-tags"></span>
            </p>
            <p class="content">
                {{ $p->content }}
            </p>
            <a href="#" class="btn btn-default btn-sm">Read More</a>
        </div>

        @endforeach

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@stop
