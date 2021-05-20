<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idtype
 * @property string $libelle
 * @property string $CREATED_AT
 * @property string $UPDATED_AT
 * @property Mediapresse[] $mediapresses
 */
class TypePresse extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'typepresse';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idtype';

    /**
     * @var array
     */
    protected $fillable = ['libelle', 'CREATED_AT', 'UPDATED_AT'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mediapresses()
    {
        return $this->hasMany('App\Mediapresse', 'idtype', 'idtype');
    }
}
