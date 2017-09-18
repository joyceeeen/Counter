<?php

namespace Kryptonit3\Counter\Models;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
  protected $table = 'counter_visitor';
    protected $fillable = ['visitor','client_ip','country','city','latitude','longitude','device','browser','created_at','updated_at'];
    
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public $timestamps = false;

    public function pages()
    {
        return $this->belongsToMany('Kryptonit3\Counter\Models\Page', 'counter_page_visitor', 'visitor_id', 'page_id');
    }
}
