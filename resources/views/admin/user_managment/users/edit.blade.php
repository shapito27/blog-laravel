@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breacrumb')
            @slot('title')Редактировать пользователя@endslot
            @slot('parent')Главная@endslot
            @slot('active')Редактирование@endslot
        @endcomponent
        <hr>
        <form action="{{route('admin.user_managment.user.update', $user)}}" method="post" class="form-horizontal">
            {{method_field('PUT')}}
            {{csrf_field()}}
            @include('admin.user_managment.users.partials.form')
        </form>
    </div>
    @push('scripts')
        <script src="{{asset('js/article/create.js')}}"></script>
    @endpush
@endsection