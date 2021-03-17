<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $fillable = ['user_id'];
    protected $start_time;
    protected $end_time;
    protected $day;
    protected $type;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
