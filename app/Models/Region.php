<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idregion
 * @property string $nomregion
 * @property boolean $actif
 * @property string $created_at
 * @property string $updated_at
 * @property Accrediregion[] $accrediregions
 */
class Region extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'region';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idregion';

    /**
     * @var array
     */
    protected $fillable = ['nomregion', 'actif', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accrediregions()
    {
        return $this->hasMany('App\Accrediregion', 'idregion', 'idregion');
    }
}
