<?php namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model{
    protected $table = 'data_pengaduan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['tujuan','nama','judul','isi','create_date','update_date','create_by','update_by','status','role'];
}
