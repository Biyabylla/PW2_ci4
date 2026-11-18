<?php
namespace App\Models;
use CodeIgniter\Model;
class MatakuliahModel extends Model
{
    protected $table = 'matakuliah';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'kode_mk',
        'nama_mk',
        'sks',
        'semester'
    ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}
