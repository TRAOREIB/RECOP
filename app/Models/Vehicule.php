<?php
//ligne 3 ajoutée
// use app\Models ;
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $marques
 */
class Vehicule extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'vehicule';

    /**
     * @var array
     */
    protected $fillable = ['type', 'marques'];

}
