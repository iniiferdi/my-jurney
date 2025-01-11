<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota_rombel extends Model
{
    use HasFactory;
    protected $table = 'anggota_user';
    protected $guarded = [];
    protected $hidden = [];

    public function getAvailableUserAttribute(){
        $available_user
    }

    public function id_rombel(){
        return $this->belongsTo(Rombel::class, 'Id_rombel' , 'id');
    }
}
