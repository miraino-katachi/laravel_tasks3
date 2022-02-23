<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    /** @var array 値を代入しないプロパティ */
    protected $guarded = [
        'id',
        'user_id',
    ];

    // /** @var array 値を代入するプロパティ */
    // protected $fillable = [
    //     'title',
    //     'description',
    //     'registration_date',
    //     'expiration_date',
    //     'completion_date',
    // ];

    /** @var array Datetime型として扱うカラム */
    protected $dates = [
        'registration_date',
        'expiration_date',
        'completion_date',
    ];

    /**
     * リレーション
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
