<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @mixin \Eloquent
 */
class Article extends Model
{

    //mass assigned
    protected $fillable = [
        'title',
        'slug',
        'preview_text',
        'detail_text',
        'image',
        'show_image',
        'meta_title',
        'meta_sescription',
        'meta_keywords',
        'published',
        'created_by',
        'modified_by'];

    /**
     * @param $value
     */
    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] =
            Str::slug(mb_substr($value, 0, 40) . '-' . Carbon::now()->format('dmyHis'), '-');
    }

    /**
     * Polymorhpic relation with categories
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function categories()
    {
        return $this->morphToMany('App\Category', 'categoryable');
    }
}
