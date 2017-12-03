<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idMidia
 * @property string $nomeMidia
 * @property string $caminhoMidia
 * @property int $idPost
 * @property Post $post
 */
class Midia extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'midia';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idMidia';

    /**
     * @var array
     */
    protected $fillable = ['nomeMidia', 'caminhoMidia', 'idPost'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Post', 'idPost', 'idPost');
    }
}
