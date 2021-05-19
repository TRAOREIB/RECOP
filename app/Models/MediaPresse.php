<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idmedia
 * @property int $idtype
 * @property int $IDMEDIAPRESSE
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Medium $medium
 * @property Typepresse $typepresse
 */
class MediaPresse extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'mediapresse';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'IDMEDIAPRESSE';

    /**
     * @var array
     */
    protected $fillable = ['idmedia', 'idtype', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function medium()
    {
        return $this->belongsTo('App\Medium', 'idmedia', 'idmedia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function typepresse()
    {
        return $this->belongsTo('App\Typepresse', 'idtype', 'idtype');
    }
}
