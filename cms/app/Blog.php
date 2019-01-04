<?php

namespace App;

use App\Category;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    const UPDATED_AT = null;
    const CREATED_AT = null;
    
    public function belongsToCategory()
    {
    	return $this->belongsTo('App\Category','category_id','id');	
    }
}
