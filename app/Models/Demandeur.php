<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $iddemandeur
 * @property string $nom
 * @property string $prenom
 * @property string $profession
 * @property string $datenaissance
 * @property string $lieunaissance
 * @property string $nationalite
 * @property string $sexe
 * @property string $numPasseport
 * @property string $carteconsulaire
 * @property string $datedelivcnib
 * @property string $dateexpircnib
 * @property int 	$telephone
 * @property string $mail1
 * @property string $personneprevenir
 * @property string $lieuresidence
 * @property string $organe
 * @property int $telorgane
 * @property string $adressestruct
 * @property string $pjcnib
 * @property string $pjpasseport
 * @property string $pjcinibperprev
 * @property string $pjpasseportperprev
 * @property string $pjcartepresse
 * @property string $numcnib
 * @property int $telephonepersp
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
    protected $fillable = ['nom', 'prenom', 'profession', 'datenaissance', 'lieunaissance', 'nationalite', 'sexe', 'numPasseport', 'carteconsulaire', 'datedelivcnib', 'dateexpircnib', 'telephone','mail1', 'personneprevenir', 'lieuresidence', 'organe', 'telorgane', 'adressestruct', 'pjcnib', 'pjpasseport', 'pjcinibperprev', 'pjpasseportperprev', 'pjcartepresse', 'numcnib', 'telephonepersp', 'actif', 'CREATED_AT', 'UPDATED_AT'];

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
