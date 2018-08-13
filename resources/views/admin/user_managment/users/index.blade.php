@extends('admin.layouts.app_admin')

@section('content')
    @component('admin.components.breacrumb')
        @slot('title')Список Пользователей@endslot
        @slot('parent')Главная@endslot
        @slot('active')Пользователи@endslot
    @endcomponent

    <hr>

    <p class="float-right">
        <a href="{{route('admin.user_managment.user.create')}}" class="btn btn-primary">
            <i class="fa fa-plus-square-o"></i> Создать Пользователя
        </a>
    </p>

    <table class="table table-striped">
        <thead>
        <th>Имя</th>
        <th>E-mail</th>
        <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){return true}else{return false;}"
                          action="{{route('admin.user_managment.user.destroy', $user)}}" method="post">
                        <a href="{{route('admin.user_managment.user.edit', $user)}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i> Редактировать
                        </a>
                        {{csrf_field()}}
                        {{--<input type="hidden" name="_method" value="delete">--}}
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Удалить</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td class="text-center" colspan="3"><h2>Данные отсутствуют</h2></td>
            </tr>
        @endforelse
        </tbody>
        <tfoot>
        <tr>
            <td colspan="3">
                <ul class="pagination float-right">
                    {{$users->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
@endsection