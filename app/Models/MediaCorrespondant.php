<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcorrespondant
 * @property int $IDMEDIACORRES
 * @property int $iduser
 * @property string $organe
 * @property string $telorgane
 * @property string $adresseorgane
 * @property boolean $actif
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Correspondant $correspondant
 * @property Medium $medium
 */
class MediaCorrespondant extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mediacorrespondant';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IDMEDIACORRES';

    /**
     * @var array
     */
    protected $fillable = ['idcorrespondant','iduser', 'organe','telorgane','adresseorgane','actif', 'CREATED_AT', 'UPDATED_AT'];

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
    public function medium()
    {
        return $this->belongsTo('App\Medium', 'idmedia', 'idmedia');
    }
}
