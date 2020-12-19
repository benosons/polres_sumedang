<?php namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model{
    protected $table = 'data_berita';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul_berita','isi_berita','satuan','create_by','status','create_date','update_date'];
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';

    public function getBerita($param = null, $role = null, $create_by = null, $update_by = null, $id = null)
    {
          return  $this->select(['data_berita.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_berita.create_by')->getWhere(['create_by' => $create_by])->getResult();
    }

    public function getSatuan()
    {
          $builder = $this->db->table('satuan');
          $query   = $builder->get();
          return  $query->getResult();
    }

    public function getSatuanByCode($code)
    {
          $builder = $this->db->table('satuan');
          $query   = $builder->getWhere(['satuan_code' => $code]);
          return  $query->getRow();
    }

    public function loadBerita($id)
    {
        $builder = $this->db->table('data_berita');
        $query   = $builder->getWhere(['satuan' => $id]);
        return  $query->getResult();
    }

    public function getBeritaByid($id)
    {
        $builder = $this->db->table('data_berita');
        $query   = $builder->getWhere(['id' => $id]);
        return  $query->getResult();
    }

    public function saveBalasan($data)
    {
        return  $this->db->table('data_balasan')->insert($data);
    }

}
