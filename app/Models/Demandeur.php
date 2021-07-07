<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $iddemandeur
 * @property int $iduser
 * @property string $nom
 * @property string $prenom
 * @property string $profession
 * @property string $datenaissance
 * @property string $lieunaissance
 * @property string $nationalite
 * @property string $sexe
 * @property string $passeport
 * @property string $laissepasser
 * @property string $professionfixeur
 * @property string $carteprofessionnelfixeur
 * @property string $telephoneresidence
 * @property string $carteconsulaire
 * @property string $datedelivcnib
 * @property string $dateexpircnib
 * @property int  $telephone
 * @property string $mail
 * @property string $personneprevenir
 * @property string $adressfixeur
 * @property string $lieuresidence
 * @property string $adressepaysresidence
 * @property string $organe
 * @property string $telorgane
 * @property string $adressestruct
 * @property string $cnib
 * @property string $telephonepersp
 * @property string $typedemandeur
 * @property boolean $actif
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Accreditation[] $accreditations
 * @property Piecesjointe[] $piecesjointes
 */
class Demandeur extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'demandeur';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'iddemandeur';

    /**
     * @var array
     */
  
    protected $fillable = ['iduser','nom', 'prenom', 'profession', 'datenaissance', 'lieunaissance','telephoneresidence','laissepasser','professionfixeur','adressepaysresidence','carteprofessionnelfixeur', 'nationalite', 'sexe', 'passeport', 'carteconsulaire', 'datedelivcnib', 'dateexpircnib', 'telephone', 'mail','personneprevenir', 'lieuresidence', 'organe', 'telorgane', 'adressestruct','cnib', 'telephonepersp','adressfixeur','typedemandeur', 'actif', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accreditations()
    {
        return $this->hasMany('App\Accreditation', 'iddemandeur', 'iddemandeur');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function piecesjointes()
    {
        return $this->hasMany('App\Piecesjointe', 'iddemandeur', 'iddemandeur');
    }
}
