@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
    @component('admin.components.breacrumb')
        @slot('title')Создать пользователя@endslot
        @slot('parent')Главная@endslot
        @slot('active')Создание@endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.user_managment.user.store')}}" method="post" class="form-horizontal text-left">
            {{csrf_field()}}
        @include('admin.user_managment.users.partials.form')
        </form>
</div>
    @push('scripts')
        <script src="{{asset('js/article/create.js')}}"></script>
    @endpush
@endsection