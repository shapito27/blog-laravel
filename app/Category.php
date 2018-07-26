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

    /**
     * Get childrens
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id');
    }

    /**
     * Polymorhpic relation with categories
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function articles()
    {
        return $this->morphedByMany('App\Article', 'categoryable');
    }

    /**
     * @param $query
     * @param int $count
     * @return mixed
     */
    public function scopeLastCategories($query, $count = 5)
    {
        return $query->orderByDesc('created_at')->limit($count)->get();
    }
}
