<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Transcript;
use PhpParser\Node\VarLikeIdentifier;

use function PHPUnit\Framework\isNull;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $casts = [
    //     'date_of_approval' => 'date:d-m-Y'
    // ];

    protected $fillable = [
        'student_id',
        'student_name',
        'date_of_bitrh',
        'place_of_birth',
        'gender',
        'phone',
        'school_name',
        'class',
        'district',
        'permanent_residence',
        'ethnic',
    ];

    public function transcript()
    {
        return $this->hasOne(Transcript::class);
    }

}
