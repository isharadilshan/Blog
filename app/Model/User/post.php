<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function tags()
    {
        return $this->belongsToMany('App\Model\User\tag','post_tags')->withTimestamps();
    }
    public function categories()
    {
        return $this->belongsToMany('App\Model\User\category','category_posts')->withTimestamps();
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getRelatedPosts() {
        $tagsOfThisPost = $this->tags;
        $categoriesOfThisPost = $this->categories;

        $query = post::query();

        foreach ($tagsOfThisPost as $tag) {
            $query = $query->orWhereHas('tags', function($q) use ($tag) {
                $q->where('name', $tag->name);
            });
        }

        foreach ($categoriesOfThisPost as $category) {
            $query = $query->orWhereHas('categories', function($q) use ($category) {
                $q->where('name', $category->name);
            });
        }
        
        $relatedPosts = $query->limit(4)->get();

        return $relatedPosts;
    }
}
