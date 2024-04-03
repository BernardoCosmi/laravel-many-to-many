<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'thumb',
        'descriptions',
        'languages',
        'type_id',
        'slug',
    ];

    public static function generateSlug($title){
        return Str::slug($title, '-');
    }

    public function type(): BelongsTo{

        return $this->belongsTo(Type::class);
    }
}