<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idaccreditation
 * @property int $iddemandeur
 * @property string $titreevenement
 * @property string $lieuevenement
 * @property string $datedebut
 * @property string $datefin
 * @property string $moyentransport
 * @property string $immatriculation
 * @property string $listemateriel
 * @property string $membresequipe
 * @property boolean $actif
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
    protected $fillable = ['iddemandeur', 'titreevenement', 'lieuevenement', 'datedebut', 'datefin', 'moyentransport', 'immatriculation', 'listemateriel', 'membresequipe', 'actif', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function demandeur()
    {
        return $this->belongsTo('App\Demandeur', 'iddemandeur', 'iddemandeur');
    }
}
