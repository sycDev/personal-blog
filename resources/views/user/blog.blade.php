@extends('user/app')

@section('bg-img', asset('user/img/home-bg.jpg'))

@section('title', 'Clean Blog')

@section('sub-heading', 'A Blog Theme by Start Bootstrap')

@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('main-content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div id="app">
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('post', $post->slug) }}">
                            <h2 class="post-title">{{ $post->title }}</h2>
                            <h3 class="post-subtitle">{{ $post->subtitle }}</h3>
                        </a>
                        <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> {{ $post->created_at->diffForHumans() }}</p>
                    </div>
                @endforeach
            </div>
            <hr>
            <!-- Pager -->
            <div class="clearfix">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

<hr>
@endsection

@section('footer')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection