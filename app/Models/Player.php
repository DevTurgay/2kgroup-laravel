<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'player';

    public static function getAllPlayerNames()
    {
        $data = [];
        $players = Player::select('username')->get();
        foreach($players as $player){
            $data[] = $player->username;
        }
        return $data;
    }
}
