@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-white bg-primary  mb-3">
                    <div class="card-header">Категорий</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$countCategories}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-success  mb-3">
                    <div class="card-header">Материалов</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$countArticles}}</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Зарегистрированных посетителей</div>
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Посетителей сегодня</div>
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <p>
                    <a href="{{route('admin.category.create')}}" class="btn  btn-lg btn-primary">Создать категорию</a>
                </p>
                @foreach($categories as $cat)
                    <a href="{{route('admin.category.edit', $cat)}}" class="list-group-item">
                        <h4 class="list-group-item list-group-item-light">{{$cat->title}}</h4>
                        <p class="list-group-item">
                            {{count($cat->articles)}}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <p>
                    <a href="{{route('admin.article.index')}}" class="btn btn-lg btn-primary">Создать материал</a>
                </p>
                @foreach($articles as $article)
                    <a href="{{route('admin.article.edit', $article)}}" class="list-group-item">
                        <h4 class="list-group-item list-group-item-light">{{$article->title}}</h4>
                        <p class="list-group-item ">
                            {{$article->categories()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                    @endforeach
            </div>
        </div>
    </div>
@endsection