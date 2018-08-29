<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Video
 *
 * @package App
 * @property string $titulo
 * @property string $texto
 * @property string $url
*/
class Video extends Model
{
    use SoftDeletes;

    protected $fillable = ['titulo', 'texto', 'url'];
    protected $hidden = [];
    
    
    
}
