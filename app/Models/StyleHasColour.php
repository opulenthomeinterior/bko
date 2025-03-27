<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StyleHasColour extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function style()
    {
        return $this->belongsTo(Style::class, 'style_id', 'id');
    }

    public function colour()
    {
        return $this->belongsTo(Colour::class, 'colour_id', 'id');
    }

    public function colourPageContent()
    {
        return $this->hasMany(ColourPageContent::class, 'style_has_colour_id', 'id');
    }
}
