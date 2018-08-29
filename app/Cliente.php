<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cliente
 *
 * @package App
 * @property string $nome
 * @property string $imagem
*/
class Cliente extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'imagem'];
    protected $hidden = [];
    
    
    
}
