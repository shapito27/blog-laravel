<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Name of category" value="{{$article->title or ""}}" required>


<label for="">Slug</label>
<input type="text" class="form-control" name="slug" value="{{$article->slug or ""}}" readonly placeholder="Auto generation">
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



<label for="">Категории</label>
<select type="text" class="form-control" name="categories[]" multiple="">
    @include('admin.article.partials.categories')
</select>

<label for="">Анонс текста</label>
<textarea name="preview_text" id="" cols="30" rows="5" class="form-control" placeholder="preview text">{{$article->preview_text or ""}}</textarea>

<label for="">Детальный текст</label>
<textarea name="detail_text" id="detail_text" cols="30" rows="10" class="form-control" placeholder="detail text">{{$article->detail_text or ""}}</textarea>


<div class="form-group">
<label for="image">Картинка</label>
<input type="file" class="form-control-file" name="image" placeholder="" value="{{$article->image or ""}}">
</div>

<div class="form-check">
    <input type="checkbox" class="form-check-input position-static" id="show_image" name="show_image"
           placeholder="Name of category" value="1"
           @if(isset($article->show_image))
                @if($article->show_image == 1)
                     checked
                @endif
           @endif
    >
    <label for="show_image">Показывать картинку</label>
</div>

<div class="form-group">
<h3>Seo</h3>
<label for="">Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="" value="{{$article->meta_title or ""}}" required>

<label for="">Description</label>
<textarea name="meta_description" id="" cols="30" rows="10" class="form-control" placeholder="detail text">{{$article->meta_description or ""}}</textarea>


<label for="">Keywords</label>
<input type="text" class="form-control" name="meta_keywords" placeholder="" value="{{$article->meta_keywords or ""}}">
</div>

<hr>

<input type="submit" class="btn btn-primary" value="Save">