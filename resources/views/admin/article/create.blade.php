@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    @component('admin.components.breacrumb')
        @slot('title')Создать статью@endslot
        @slot('parent')Главная@endslot
        @slot('active')Создание@endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.article.store')}}" method="post" class="form-horizontal text-left">
            {{csrf_field()}}
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        @include('admin.article.partials.form')
        </form>
</div>
    @push('scripts')
        <script src="{{asset('js/article/create.js')}}"></script>
    @endpush
@endsection