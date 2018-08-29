<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Atividade
 *
 * @package App
 * @property string $nome
 * @property string $texto
 * @property string $categoria
*/
class Atividade extends Model
{
    use SoftDeletes;

    protected $fillable = ['nome', 'texto', 'categoria_id'];
    protected $hidden = [];
    
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setCategoriaIdAttribute($input)
    {
        $this->attributes['categoria_id'] = $input ? $input : null;
    }
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id')->withTrashed();
    }
    
}
