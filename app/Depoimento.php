<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Depoimento
 *
 * @package App
 * @property string $cliente
 * @property string $empresa
 * @property text $depoimento
*/
class Depoimento extends Model
{
    use SoftDeletes;

    protected $fillable = ['cliente', 'empresa', 'depoimento'];
    protected $hidden = [];
    
    
    
}
