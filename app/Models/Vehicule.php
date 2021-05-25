<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $marques

 * @property boolean $actif

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

    protected $fillable = ['type', 'marques','actif'];


}
