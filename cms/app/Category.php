<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    
    public function hasManyBlog()
  	{
    	return $this->hasMany('Blog', 'id', 'category_id');
  	}
}
