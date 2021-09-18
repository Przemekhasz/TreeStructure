<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class Tree extends Model
{
    use HasFactory;

    protected $table = "tree";

    protected $primaryKey = 'id';

    protected $fillable = ['parent_id', 'name'];

    public function childs() {
        return $this->hasMany(Tree::class,'parent_id','id') ;
    }
}
