@extends('layouts.app')

@section('title', $article->title)
@section('keyword', $article->meta_keywords)
@section('description', $article->meta_description)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$article->title}}</h1>
                <p>
                    {!! $article->detail_text !!}
                </p>
                <p>Tags: {{$article->categories()->pluck('title')->implode(', ')}}</p>
            </div>
        </div>
    </div>
    @endsection