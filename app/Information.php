<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idinfo
 * @property int $idcorrespondant
 * @property string $titre
 * @property string $contenu
 * @property string $date
 * @property boolean $actif
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 */
class Information extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'informations';

    /**
     * @var array
     */
    protected $fillable = ['idinfo', 'idcorrespondant', 'titre', 'contenu', 'date', 'actif', 'CREATED_AT', 'UPDATED_AT'];

}
