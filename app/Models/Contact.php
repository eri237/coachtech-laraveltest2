<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'text'];
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . ' ' . $this->email . ' ' .$this->text;
        return $txt;
    }
}
