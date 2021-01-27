<?php namespace App\Models;

use CodeIgniter\Model;

class PengaduanModel extends Model{
    protected $table = 'data_pengaduan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['kode_tujuan','nama_tujuan','judul','isi','create_date','update_date','create_by','update_by','status','role'];
    protected $createdField  = 'create_date';
    protected $updatedField  = 'update_date';

    public function getPengaduan($param = null, $role = null, $create_by = null, $update_by = null, $id = null, $satuan = null)
    {

      if($param == 'inbox'){
        if($role == 200){
          return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['create_by' => $create_by, 'status' => 1])->getResult();
        }else{
          // echo $this->db->getLastQuery();
          return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['kode_tujuan' => $satuan], 'status in (0,1)')->getResult();
        }
      }else if($param == 'sent'){
        if($role == 200){
          return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['create_by' => $create_by, 'status' => 0])->getResult();
        }else{
          return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['kode_tujuan' => $satuan, 'status' => 1])->getResult();
        }
      }else if($param == 'read'){
        if($role == 200){
          return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['id' => $id])->getResult();
        }else{
          return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['id' => $id])->getResult();
        }
      }
      //
      //  if($param == 'inbox' && $role != 20){
      //   return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['tujuan' => $role])->getResult();
      // }else if($param == 'inbox' && $role == 20){
      //   return  $this->select(['data_pengaduan.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_pengaduan.create_by')->getWhere(['tujuan' => $role])->getResult();
      // }
      // echo $this->db->getLastQuery();
    }

    public function getBalasan($id)
    {
        return $this->db->table('data_balasan')->join('users','users.user_id = data_balasan.create_by')->getWhere(['id_pengaduan' => $id])->getResult();
  }

    public function saveBalasan($data)
    {
        return  $this->db->table('data_balasan')->insert($data);
    }

}
