<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property integer $iduser
 * @property int $idaccreditation
 * @property string $titremessage
 * @property string $message
 * @property string $created_at
 * @property string $updated_at
 * @property Accreditation $accreditation
 * @property User $user
 */
class Ampliateur extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'ampliateur';

    /**
     * @var array
     */
    protected $fillable = ['iduser', 'idaccreditation','titremessage', 'message', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accreditation()
    {
        return $this->belongsTo('App\Accreditation', 'idaccreditation', 'idaccreditation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'iduser');
    }
}
