<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

class Task extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['type', 'project_id', 'user_id', 'name', 'slug', 'intro', 'description', 'ticket_number', 'priority', 'tag', 'requestor', 'due_date', 'completed_date', 'publish_date'
    ];

    public function project()
    {
        $user = Auth::user()->id;
        return $this->belongsTo('App\Project')->where('user_id', '=', $user);
    }
}
