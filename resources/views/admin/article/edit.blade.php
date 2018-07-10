@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breacrumb')
            @slot('title')Редактировать категорию@endslot
            @slot('parent')Главная@endslot
            @slot('active')Редактирование@endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.article.update', $article)}}" method="post" class="form-horizontal">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}
            @include('admin.article.partials.form')
        </form>
    </div>
@endsection