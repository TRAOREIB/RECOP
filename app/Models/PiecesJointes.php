<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $idcorrespondant
 * @property int $iddemandeur
 * @property string $photo
 * @property string $cv
 * @property string $pjpasseport
 * @property string $pjcnib
 * @property string $pjcartepresse
 * @property string $pjcnibperprev
 * @property string $pjpasseportperprev
 * @property string $visamedia
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
    protected $fillable = ['idcorrespondant', 'iddemandeur', 'photo', 'cv', 'pjpasseport', 'pjcnib', 'pjcartepresse', 'pjcnibperprev', 'pjpasseportperprev', 'visamedia'];

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