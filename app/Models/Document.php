<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $iddocument
 * @property integer $iduser
 * @property string $nomdocument
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Document extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'document';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'iddocument';

    /**
     * @var array
     */
    protected $fillable = ['iduser', 'nomdocument', 'type', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'iduser');
    }
}
