<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portfolio extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'thumbnail',
        'client',
        'category_id',
        'date',
        'description',
        'footage'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }


}
