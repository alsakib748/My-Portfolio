@extends('frontend.layouts.layout')

@section('content')
<header class="site-header parallax-bg">
    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-sm-7">
                <h2 class="title">Blog</h2>
            </div>
            <div class="col-sm-5">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Portfolio-Area-Start -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="{{ isset($blog) ? asset($blog->image) : asset('default-image.jpg') }}" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title">{{ $blog->title ?? 'Default Title' }}</h3>
                        <div class="desc">
                            {!! $blog->description ?? 'Default description.' !!}
                        </div>
                        <a href="{{ route('show.blog', $blog->id) }}" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
