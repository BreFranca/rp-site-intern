<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Info
 *
 * @package App
 * @property string $email_contato
 * @property string $linked_in
 * @property string $facebook
 * @property string $instagram
 * @property string $vimeo
*/
class Info extends Model
{
    use SoftDeletes;

    protected $fillable = ['email_contato', 'linked_in', 'facebook', 'instagram', 'vimeo'];
    protected $hidden = [];
    
    
    
}
