<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Graph extends Model
{
    /**
     * @var string $table
     */
    protected $table = 'graphs';
    /**
     * @var string $primaryKey
     */
    protected $primaryKey = 'uuid';

    /**
     * @var array $fillable
     */
    protected $fillable = [
        'subject',
        'predicate',
        'object',
        'language',
        'datatype',
        'graph',
    ];
}

