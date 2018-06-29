@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="card text-white bg-primary  mb-3">
                    <div class="card-header">Категорий</div>
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-white bg-success  mb-3">
                    <div class="card-header">Материалов</div>
                    <div class="card-body">
                        <h5 class="card-title">0</h5>
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
                    <a href="" class="btn  btn-lg btn-primary">Создать категорию</a>
                </p>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item list-group-item-light">Категория первая</h4>
                    <p class="list-group-item">
                        Количество материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <p>
                    <a href="" class="btn btn-lg btn-primary">Создать материал</a>
                </p>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item list-group-item-light">Материал первый</h4>
                    <p class="list-group-item ">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection