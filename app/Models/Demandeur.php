<?php

namespace App;

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
 * @property int $telephone
 * @property string $personneprevenir
 * @property string $lieuresidence
 * @property string $immatriculationvehicule
 * @property string $organe
 * @property int $telorgane
 * @property string $adressestruct
 * @property string $pjcnib
 * @property string $pjpasseport
 * @property string $pjcinibperprev
 * @property string $pjpasseportperprev
 * @property string $pjcartepresse
 * @property string $membresequipe
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Accreditation[] $accreditations
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
    protected $fillable = ['nom', 'prenom', 'profession', 'datenaissance', 'lieunaissance', 'nationalite', 'sexe', 'numPasseport', 'carteconsulaire', 'datedelivcnib', 'dateexpircnib', 'telephone', 'personneprevenir', 'lieuresidence', 'immatriculationvehicule', 'organe', 'telorgane', 'adressestruct', 'pjcnib', 'pjpasseport', 'pjcinibperprev', 'pjpasseportperprev', 'pjcartepresse', 'membresequipe', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accreditations()
    {
        return $this->hasMany('App\Accreditation', 'iddemandeur', 'iddemandeur');
    }
}
