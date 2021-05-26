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
 * @property Correspondant $correspondant
 */
class Informations extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idinfo';

    /**
     * @var array
     */
    protected $fillable = ['idcorrespondant', 'titre', 'contenu', 'date', 'actif', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function correspondant()
    {
        return $this->belongsTo('App\Correspondant', 'idcorrespondant', 'idcorrespondant');
    }
}
