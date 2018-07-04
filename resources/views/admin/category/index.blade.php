@extends('admin.layouts.app_admin')

@section('content')
    @component('admin.components.breacrumb')
        @slot('title')Список категорий@endslot
        @slot('parent')Главная@endslot
        @slot('active')Категории@endslot
    @endcomponent

    <hr>

    <p class="float-right">
        <a href="{{route('admin.category.create')}}" class="btn btn-primary">
            <i class="fa fa-plus-square-o"></i> Создать категорию
        </a>
    </p>

    <table class="table table-striped">
        <thead>
        <th>Наименование</th>
        <th>Публикация</th>
        <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse ($categories as $category)
            <tr>
                <td>{{ $category->title }}</td>
                <td>{{ $category->published }}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){return true}else{return false;}"
                          action="{{route('admin.category.destroy', $category)}}" method="post">
                        <a href="{{route('admin.category.edit', $category)}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i> Редактировать
                        </a>
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="delete">
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
                    {{$categories->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
@endsection