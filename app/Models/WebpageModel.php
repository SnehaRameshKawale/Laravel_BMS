<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebpageModel extends Model
{
    use HasFactory;
    protected $table = 'webpage';
    protected $fillable = ['name','slug','html','status','created_by','updated_by','created_at','updated_at'];
}
