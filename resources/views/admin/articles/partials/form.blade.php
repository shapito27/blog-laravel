<label for="published">Статус</label>
<select name="published" id="published" class="form-control">
    @if(isset($article->id))
        <!-- update -->
            <option value="0"
            @if($article->published == 0) selected @endif>Не опубликовано</option>
            <option value="1"
            @if($article->published == 1) selected @endif>Опубликовано</option>
        @else
        <!-- create -->
            <option value="0">Не опубликовано</option>
            <option value="1">Опубликовано</option>
    @endif
</select>

<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Name of category" value="{{$article->title or ""}}" required>

<label for="">Slug</label>
<input type="text" class="form-control" name="slug" value="{{$article->slug or ""}}" readonly placeholder="Auto generation">

<label for="">Parent categories</label>
<select type="text" class="form-control" name="parent_id">
    <option value="">-- no parent category --</option>
    @include('admin.category.partials.categories')
</select>

<hr>

<input type="submit" class="btn btn-primary" value="Save">