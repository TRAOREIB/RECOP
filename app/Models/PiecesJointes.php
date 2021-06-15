<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idcorrespondant
 * @property int $iddemandeur
 * @property int $idaccreditation
 * @property string $photo
 * @property string $cv
 * @property string $lettrerecommendation
 * @property string $pjpasseport
 * @property string $pjcnib
 * @property string $pjcartepresse
 * @property string $pjlaissezpasser
 * @property string $pjcnibperprev
 * @property string $pjcarteconsulaire
 * @property string $pjpasseportperprev
 * @property string $visamedia
 * @property boolean $actif
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Correspondant $correspondant
 * @property Demandeur $demandeur
 */
class PiecesJointes extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'piecesjointes';

    /**
     * @var array
     */
    protected $fillable = ['idcorrespondant', 'iddemandeur', 'photo', 'cv','lettrerecommendation','pjlaissezpasser', 'pjpasseport', 'pjcnib', 'pjcartepresse','idaccreditation', 'pjcnibperprev','pjcarteconsulaire', 'pjpasseportperprev', 'visamedia', 'actif', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function correspondant()
    {
        return $this->belongsTo('App\Correspondant', 'idcorrespondant', 'idcorrespondant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function demandeur()
    {
        return $this->belongsTo('App\Demandeur', 'iddemandeur', 'iddemandeur');
    }
}
