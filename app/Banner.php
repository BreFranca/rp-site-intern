<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Banner
 *
 * @package App
 * @property string $texto
 * @property string $banner
 * @property string $slug
 * @property string $link
 * @property text $descricao
*/
class Banner extends Model
{
    use SoftDeletes;

    protected $fillable = ['texto', 'banner', 'slug', 'link', 'descricao'];
    protected $hidden = [];
    
    
    
}
