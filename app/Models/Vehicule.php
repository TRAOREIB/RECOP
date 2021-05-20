<?php
<<<<<<< HEAD
//ligne 3 ajoutée
// use app\Models ;
=======

>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $marques
<<<<<<< HEAD
=======
 * @property boolean $actif
>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095
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
<<<<<<< HEAD
    protected $fillable = ['type', 'marques'];
=======
    protected $fillable = ['type', 'marques','actif'];
>>>>>>> f1fd75a1d461c86005adca33e1f2af767025e095

}
