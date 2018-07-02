@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    @component('admin.components.breacrumb')
        @slot('title')Создать категорию@endslot
        @slot('parent')Главная@endslot
        @slot('active')Создание@endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.category.store')}}" method="post" class="form-horizontal">
            {{csrf_field()}}
        @include('admin.category.partials.form')
        </form>
</div>
@endsection