<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model {

    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function programs() {
        return $this->belongsToMany(Program::class);
    }

    public function state() {
        return $this->belongsTo(State::class);
    }

   public function regions() {
        return $this->hasOneThrough(Region::class, State::class);
    }
    
    
    public function schooltype() {
        return $this->belongsTo(Schooltype::class);
    }

    public function term() {
        return $this->belongsTo(Term::class);
    }

    public function lgas() {
        return $this->hasOneThrough(Lga::Class, State::Class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }    

}
