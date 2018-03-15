<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = ['user_id', 'projectname', 'slug'];

	public function tasks()
    {
        return $this->hasMany('App\Task')->Where('completed_date', '=', NULL);
    }

    public function completedTasks()
    {
        return $this->hasMany('App\Task')->where('completed_date', '!=', '0000-00-00');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }
}
