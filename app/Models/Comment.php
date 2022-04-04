<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'body',
        'visible'
    ];

    protected $casts = [
        'visible' => 'boolean'
    ];

    // parâmetros necessários para usar UUID
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
