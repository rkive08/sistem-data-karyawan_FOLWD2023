<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $primaryKey = 'nip'; 
    public $incrementing = false; 
    protected $keyType = 'string'; 
    public $timestamps = false;
    protected $table = "tb_pegawai";
    protected $fillable = ['nip', 'nm_pegawai', 'foto', 'jkl','tgl_lahir', 'jabatan', 'kontrak', 'email', 'alamat', 'tlp'];

}
