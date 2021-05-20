<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcorrespondant
 * @property string $nom
 * @property string $prenom
 * @property string $cnib
 * @property string $passeport
 * @property string $fonction
 * @property int $telephone1
 * @property int $telephone2
 * @property string $mail1
 * @property string $lieuresidence
 * @property int $numcartepresse
 * @property string $photo
 * @property string $cv
 * @property string $visamedia
 * @property string $refjournal
 * @property string $parcourspro
 * @property string $region
 * @property string $pjcartepresse
 * @property string $pjpasseport
 * @property string $pjcnib
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Information[] $informations
 * @property Mediacorrespondant[] $mediacorrespondants
 */
class Correspondant extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'correspondant';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idcorrespondant';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'cnib', 'passeport', 'fonction', 'telephone1', 'telephone2', 'mail1', 'lieuresidence', 'numcartepresse', 'photo', 'cv', 'visamedia', 'refjournal', 'parcourspro', 'region', 'pjcartepresse', 'pjpasseport', 'pjcnib', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function informations()
    {
        return $this->hasMany('App\Information', 'idcorrespondant', 'idcorrespondant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediacorrespondants()
    {
        return $this->hasMany('App\Mediacorrespondant', 'idcorrespondant', 'idcorrespondant');
    }
}
