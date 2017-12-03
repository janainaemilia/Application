<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idTagPost
 * @property string $nomeTag
 * @property Post[] $posts
 */
class Tag extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'tagpost';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idTagPost';

    /**
     * @var array
     */
    protected $fillable = ['nomeTag'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'itemtagpost', 'idTagPost', 'idPost');
    }
}
