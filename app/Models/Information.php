<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $type
 * @property string $marques

 * @property boolean $actif

 */
 
 
class Information extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'information';

    /**
     * @var array
     */

    protected $fillable = ['titre', 'contenu','date','actif','created_at','updated_at'];


}
