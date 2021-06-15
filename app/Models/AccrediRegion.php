<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idaccrediregion
 * @property int $idregion
 * @property string $datedebut
 * @property string $datefin
 *  @property string $lieuevenement
 * @property string $titreevenement
 * @property int $idaccreditation
 * @property boolean $actif
 * @property string $created_at
 * @property string $updated_at
 */
class AccrediRegion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'accrediregion';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idaccrediregion';

    /**
     * @var array
     */
    protected $fillable = ['idregion', 'idaccreditation','datedebut','datefin','lieuevenement','titreevenement','actif', 'created_at', 'updated_at'];

}
