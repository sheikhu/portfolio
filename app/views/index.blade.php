@extends('layout')

@section('container')

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Build a website
                        <strong>worth visiting</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="dist/img/intro-pic.jpg" alt="">
                    <hr class="visible-xs">
                    <p>The boxes used in this template are nested inbetween a normal Bootstrap row and the start of your column layout. The boxes will be full-width boxes, so if you want to make them smaller then you will need to customize.</p>
                    <p>A huge thanks to <a href="http://join.deathtothestockphoto.com/" target="_blank">Death to the Stock Photo</a> for allowing us to use the beautiful photos that make this template really come to life. When using this template, make sure your photos are decent. Also make sure that the file size on your photos is kept to a minumum to keep load times to a minimum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc placerat diam quis nisl vestibulum dignissim. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Derniers articles</strong>
                    </h2>
                    <hr>
                    <div class="row">
                        @foreach ($posts as $post)
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h3>
                                <a href="#" class="post-title">
                                    {{ $post->title }}
                                </a>
                                <small>
                                {{ $post->created_at->format('d m, Y') }}
                                </small>
                            </h3>
                        </div>
                        @endforeach
                        <hr>
                        <div class="text-center">
                            <a href="{{ route('blog') }}" class="btn btn-default">
                            Plus d'articles
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@stop
