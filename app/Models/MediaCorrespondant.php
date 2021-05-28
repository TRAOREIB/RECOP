<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idcorrespondant
 * @property int $idmedia
 * @property int $IDMEDIACORRES
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
    protected $fillable = ['idcorrespondant', 'idmedia','actif', 'CREATED_AT', 'UPDATED_AT'];

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
