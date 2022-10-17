<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $primaryKey = 'client_id';
    protected $table = 'tb_m_clients';
    protected $fillable = ['client_id', 'client_name', 'client_address'];
    use HasFactory;
}
