<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    /**
     * Attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'miles',
        'date',
        'notes'
    ];

    /**
     * A record can belong to only one user
     * 
     * @var Illuminate\Database\Eloquent\Concerns\HasRelationships::belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
