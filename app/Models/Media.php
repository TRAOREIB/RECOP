<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idmedia
 * @property string $typemedia
 * @property string $nommedia
 * @property string $telmedia
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Mediacorrespondant[] $mediacorrespondants
 * @property Mediapresse[] $mediapresses
 */
class Media extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idmedia';

    /**
     * @var array
     */
    protected $fillable = ['typemedia', 'nommedia', 'telmedia', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediacorrespondants()
    {
        return $this->hasMany('App\Mediacorrespondant', 'idmedia', 'idmedia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediapresses()
    {
        return $this->hasMany('App\Mediapresse', 'idmedia', 'idmedia');
    }
}
