<?php

namespace App;



class Task extends \Illuminate\Database\Eloquent\Model {
    
    
    public $timestamps = false;
    
    protected $fillable = ['name', 'done', 'flag', 'due'];
    
    
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function assigned() {
        return $this->belongsTo('App\User');
    }
    
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function project() {
        return $this->belongsTo('App\Project');
    }
    
    /**
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function label() {
        return $this->belongsTo('App\ProjectLabel');
    }
}
