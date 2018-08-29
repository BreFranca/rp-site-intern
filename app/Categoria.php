<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categoria
 *
 * @package App
 * @property string $categoria
 * @property string $slug
*/
class Categoria extends Model
{
    use SoftDeletes;

    protected $fillable = ['categoria', 'slug'];
    protected $hidden = [];
    
    
    
}
