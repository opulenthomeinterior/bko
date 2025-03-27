<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColourPageContent extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function styleHasColour()
    {
        return $this->belongsTo(StyleHasColour::class, 'style_has_colour_id', 'id');
    }
}
