<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    use HasFactory;

    //Timestamps
    public $timestamps = true;
    
    protected $table = "uploads";
    
    public $primaryKey = "upload_id";
    

    protected $fillable = [
        'filename',
        'filepath',
        'student_id_record',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function records()
    {
        return $this->belongsTo('App\Records');
    }
    
    public function newrecords()
    {
        return $this->belongsTo('App\NewRecords');
    }
}
