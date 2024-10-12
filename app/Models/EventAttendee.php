<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAttendee extends Model
{
    use HasFactory;
    public function event_info()
    {
        return $this->belongsTo(ProgramEvent::class, 'event_id');
    }
}
