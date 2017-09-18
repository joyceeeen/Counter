<?php

namespace Kryptonit3\Counter\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table = 'counter_page';

    protected $fillable = ['page','number_of_hit'];

    public $timestamps = false;

    public function visitors()
    {
        return $this->belongsToMany('Kryptonit3\Counter\Models\Visitor', 'counter_page_visitor', 'page_id', 'visitor_id');
    }
}
