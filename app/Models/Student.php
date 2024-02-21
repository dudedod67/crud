<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['nis', 'nama', 'kelas_id', 'tanggal_lahir', 'alamat'];
    // protected $fillable = [
    //     'nis',
    //     'nama',
    //     'tanggal_lahir',
    //     'kelas',
    //     'alamat',
    // ];

    protected $guarded = ['id'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
    
    public function scopeFilter($query, array $filters){
        if(isset($filters['search']) ? $filters['search'] : false){
          return  $query->where('nama', 'like', '%' . request('search') . '%');
        }
    }

}
