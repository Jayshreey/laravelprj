<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Faq_category extends Model
{
    use HasFactory;
    protected $table = 'faq_category';
    protected $primaryKey = "id";
}
