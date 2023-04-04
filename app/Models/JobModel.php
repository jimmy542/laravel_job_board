<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobModel extends Model
{
    use HasFactory;
    protected $fillable=[
        'job_name','company','area','post_code','city','detail','skills','salary','user_id'
    ];
}
