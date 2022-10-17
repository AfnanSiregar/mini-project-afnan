<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $primaryKey = 'project_id';
    protected $table = 'tb_m_projects';
    protected $fillable = ['project_id', 'project_name', 'client_id', 'project_start', 'project_end', 'project_status'];

    public function clientModel()
    {
        return $this->belongsTo(Client::class, 'client_id', 'client_id');
    }
    use HasFactory;
}
