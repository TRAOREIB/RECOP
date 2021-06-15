<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcorrespondant
 * @property int $iduser
 * @property string $nom
 * @property string $prenom
 * @property string $sexe
 * @property string $typecorrespondant
 * @property string $origine
 * @property string $cnib
 * @property string $datenaissance
 * @property string $datedelivcnib 
 * @property string $dateexpircnib
 * @property string $personneprevenir
 * @property string $telephonepersp
 * @property string $passeport
 * @property string $profession
 * @property string $telephone
 * @property string $telephone2
 * @property string $mail1
 * @property string $lieuresidence
 * @property int $numcartepresse
 * @property string $refjournal
 * @property string $parcourspro
 * @property string $region
 * @property string $organe
 * @property string $telorgane
 *  @property string $adresseorgane
 * @property string $typepresse
 * @property boolean $actif
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property User $user
 * @property Information[] $informations
 * @property Mediacorrespondant[] $mediacorrespondants
 * @property Piecesjointe[] $piecesjointes
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
    protected $fillable = ['iduser', 'nom', 'prenom','sexe', 'typecorrespondant', 'origine', 'cnib','datedelivcnib','dateexpircnib','datenaissance', 'passeport', 'profession','personneprevenir','telephonepersp', 'telephone', 'telephone2', 'mail', 'lieuresidence', 'numcartepresse', 'refjournal', 'parcourspro', 'region','typepresse','organe','telorgane','adresseorgane', 'actif', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'iduser');
    }

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function piecesjointes()
    {
        return $this->hasMany('App\Piecesjointe', 'idcorrespondant', 'idcorrespondant');
    }
}
