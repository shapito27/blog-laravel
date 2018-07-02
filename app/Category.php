<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @mixin \Eloquent
 */
class Category extends Model
{
    //mass assigned
    protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] =
            Str::slug(mb_substr($value, 0, 40) . '-' . Carbon::now()->format('dmyHis'), '-');
    }

    //Get childrens
    public function children(){
        return $this->hasMany(self::class, 'parent_id', 'id');
    }
}
