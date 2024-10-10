<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    use HasFactory;

    // o método casts converte o tech_stack em array
    public function casts()
    {
        return [
                'tech_stack' => 'array',
        ];
    }
}
