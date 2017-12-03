<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idPost
 * @property int $idTagPost
 * @property Post $post
 * @property Tagpost $tagpost
 */
class TagPost extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'itemtagpost';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function post()
    {
        return $this->belongsTo('App\Post', 'idPost', 'idPost');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tagpost()
    {
        return $this->belongsTo('App\Tagpost', 'idTagPost', 'idTagPost');
    }
}
