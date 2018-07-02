@foreach($categories as $cat)
    <option value="{{$cat->id or ""}}"
            @isset($category->id)
                @if($category->parent_id == $cat->id)
                    selected
                @endif

                @if($category->id == $cat->id)
                    hidden
                @endif
            @endisset
    >{!! $delimetr !!}{{$cat->title or ""}}</option>

    @if(count($cat->children) > 0)
        @include('admin.category.partials.categories', [
        'categories' => $cat->children,
        'delimetr' => '-' . $delimetr
        ])
    @endif
@endforeach