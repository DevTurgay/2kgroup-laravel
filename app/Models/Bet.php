<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    use HasFactory;
    protected $table = 'view_3d';
    public $timestamps = false;
    protected $fillable = ['bet','win','net','rake','date','playerid','agentid'];
}
