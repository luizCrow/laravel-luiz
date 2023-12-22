<?php

// app/Models/Produto.php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Produto extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'produtos';

    protected $fillable = [
        'nome', 'descricao', 'preco',
    ];
}
