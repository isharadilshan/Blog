<?php

namespace App\Model\User;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Model\User\post','category_posts')->paginate(8);//set up the relationship between news and newscategory
    }
    public function getRouteKeyName()//set up the route by slug
    {
        return 'slug';
    }
}
