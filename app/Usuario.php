<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $idusuario
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property Post[] $posts
 */
class Usuario extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuario';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'idusuario';

    /**
     * @var array
     */
    protected $fillable = ['nome', 'email', 'senha'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('App\Post', 'idUsuario', 'idusuario');
    }
}
