<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
    'issue_id',
    'content',
];

    public function issue()
{
    return $this->belongsTo(Issue::class);
}
}
