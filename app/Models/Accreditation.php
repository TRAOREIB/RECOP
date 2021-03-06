<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idaccreditation
 * @property int $iddemandeur
 * @property int $iduser
 * @property string $titreevenement
 * @property string $region1
 * @property string $region2
 * @property string $region3
 * @property string $region4
 * @property string $region5
 * @property string $datedebut
 * @property string $datefin
 * @property string $moyentransport
 * @property string $immatriculation
 * @property string $messageinvalidation
 * @property string $titreinvalidation
 * @property string $listemateriel
 * @property string $membresequipe
 * @property boolean $actif
 * @property boolean $valider
 * @property boolean $transfer
 * @property string $datetransfer
 * @property string $datevalider
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Demandeur $demandeur
 */
class Accreditation extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'accreditation';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idaccreditation';

    /**
     * @var array
     */
    protected $fillable = ['iddemandeur','iduser', 'titreevenement','region1','region2','region3','region4','region5','datedebut', 'datefin', 'moyentransport', 'immatriculation', 'listemateriel', 'membresequipe','titreinvalidation', 'actif','valider','transfer','datetransfer','datevalider','messageinvalidation', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function demandeur()
    {
        return $this->belongsTo('App\Demandeur', 'iddemandeur', 'iddemandeur');
    }
}
