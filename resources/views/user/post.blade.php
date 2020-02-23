@extends('user/app')

@section('bg-img', asset('user/img/post-bg.jpg'))

@section('title', $post->title)

@section('sub-heading', $post->subtitle)

@section('main-content')

<!-- Post Content -->
<article>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created at {{ $post->created_at->diffForHumans() }}</small>
            {{-- Category clouds --}}
            @foreach ($post->categories as $category)
                <small class="float-right" style="margin-right: 10px;">
                    {{ $category->name }}
                </small>
            @endforeach
            {!! htmlspecialchars_decode($post->body) !!}
            {{-- Tag clouds --}}
            <h3>Tag Clouds</h3>
            @foreach ($post->tags as $tag)
                <small class="float-left" style="margin-right: 10px; border-radius: 5px; border: 1px solid grey; padding: 5px;">
                    {{ $tag->name }}
                </small>
            @endforeach
        </div>
    </div>
</div>
</article>

<hr>

@endsection