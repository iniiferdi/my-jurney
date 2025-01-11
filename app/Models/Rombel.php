<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'rombel';
    protected $guarded = [];
    protected $hidden = [];

    public function id_semester(){
        return $this->belongsTo(Semester::class, 'id_semester', 'id');
    }
    public function id_user(){
        return $this->belongsTo(User::class, 'id_wali', 'id');
    }
}
