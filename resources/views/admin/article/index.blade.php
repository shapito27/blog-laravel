@extends('admin.layouts.app_admin')

@section('content')
    @component('admin.components.breacrumb')
        @slot('title')Список Статей@endslot
        @slot('parent')Главная@endslot
        @slot('active')Статьи@endslot
    @endcomponent

    <hr>

    <p class="float-right">
        <a href="{{route('admin.article.create')}}" class="btn btn-primary">
            <i class="fa fa-plus-square-o"></i> Создать Статью
        </a>
    </p>

    <table class="table table-striped">
        <thead>
        <th>Наименование</th>
        <th>Публикация</th>
        <th class="text-right">Действие</th>
        </thead>
        <tbody>
        @forelse ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->published }}</td>
                <td class="text-right">
                    <form onsubmit="if(confirm('Удалить?')){return true}else{return false;}"
                          action="{{route('admin.article.destroy', $article)}}" method="post">
                        <a href="{{route('admin.article.edit', $article)}}" class="btn btn-primary">
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
                    {{$articles->links()}}
                </ul>
            </td>
        </tr>
        </tfoot>
    </table>
@endsection