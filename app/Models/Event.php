<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'venue',
        'date',
        'start_time',
        'description',
        'booking_url',
        'tags',
        'organizer_id',
        'event_category_id'
    ];

    public function organizer()
    {
        return $this->belongsTo(organizer::class, 'organizer_id');
    }

    public function event_category()
    {
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
