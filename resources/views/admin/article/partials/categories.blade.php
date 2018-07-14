@foreach($categories as $cat)
    <option value="{{$cat->id or ""}}"
    @isset($article->id)
        @foreach($article->categories as $category)
            @if($category->id == $cat->id)
                selected
            @endif
        @endforeach
    @endisset
    >{!! $delimetr !!}{{$cat->title or ""}}</option>

    @if(count($cat->children) > 0)
        @include('admin.article.partials.categories', [
        'categories' => $cat->children,
        'delimetr' => '-' . $delimetr
        ])
    @endif
@endforeach