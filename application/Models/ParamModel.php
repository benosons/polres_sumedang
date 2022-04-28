<?php namespace App\Models;

use CodeIgniter\Model;

class ParamModel extends Model{

    public function getBerita($param = null, $role = null, $create_by = null, $update_by = null, $id = null)
    {
          return  $this->select(['data_berita.*', 'users.user_id', 'users.user_name', 'users.user_email', 'users.user_role', 'users.user_fullname'])->join('users','users.user_id = data_berita.create_by')->getWhere(['create_by' => $create_by])->getResult();
    }

    public function getparam($table = null, $id = null)
    {
          $builder = $this->db->table($table);
          if($id){
            $query   = $builder->getWhere(['satuan_code' => $id]);
          }else{
            $query   = $builder->get();
          }
          return  $query->getResult();
    }

    public function loadBerita($id)
    {
        $builder = $this->db->table('data_berita');
        $query   = $builder->getWhere(['satuan' => $id]);
        return  $query->getResult();
    }

    public function saveParam($table = null, $data = null)
    {
        return  $this->db->table($table)->insert($data);
    }

    public function getkota($param = null, $id = null )
    {
        if($param == 'kecamatan'){
          $sql = "select * from districts where regency_id = 3211";
        }else if($param == 'desa'){
          $sql = "select * from villages where district_id = $id";
        }
        
        $result = $this->db->query($sql);
        $row = $result->getResult();
        return $row;
    }

    public function getMutasi($table = null, $id = null, $role = null, $date = null, $pos = null)
    {
    
      if($role != 300){
        $wherePos = '';
        if($pos != 0){
          $wherePos = " and create_by = '$pos' ";
        }
        $sql = "select $table.*, users.user_fullname from $table inner join users on users.user_id = $table.create_by where DATE_FORMAT(tanggal,'%Y-%m-%d') = '$date' $wherePos";
      }else{
        $sql = "select $table.*, users.user_fullname from $table inner join users on users.user_id = $table.create_by where create_by = '$id' and DATE_FORMAT(tanggal,'%Y-%m-%d') = '$date'";
      }
      
      $result = $this->db->query($sql);
      $row = $result->getResult();
      return $row;
    }

    public function getTabulasi($id = null, $role = null, $type = null, $date = null, $pos = null)
    {
      if($role != 300){
        $wherePos = '';
        if($pos != 0){
          $wherePos = " and create_by = '$pos'";
        }
        $sql = "select * from data_tabulasi where type = '$type' and DATE_FORMAT(create_date,'%Y-%m-%d') = '$date' $wherePos";
      }else{
        $sql = "select * from data_tabulasi where create_by = '$id' and type = '$type' and DATE_FORMAT(create_date,'%Y-%m-%d') = '$date'";
      }

      $result = $this->db->query($sql);
      $row = $result->getResult();
      return $row;
    }

    public function getSupervisi($id = null, $role = null, $date = null, $pos = null)
    {
      if($role != 300){
        $wherePos = '';
        if($pos != 0){
          $wherePos = " and create_by = '$pos'";
        }
        $sql = "select * from data_supervisi where DATE_FORMAT(create_date,'%Y-%m-%d') = '$date' $wherePos";
      }else{
        $sql = "select * from data_supervisi where create_by = '$id' and type = '$type' and DATE_FORMAT(create_date,'%Y-%m-%d') = '$date'";
      }
      
      $result = $this->db->query($sql);
      $row = $result->getResult();
      return $row;
    }

    public function getCctv($id = null, $role = null)
    {
      if($role != 300){
        $sql = "select * from data_cctv";
      }else{
        $sql = "select * from data_cctv where create_by = '$id'";
      }

      $result = $this->db->query($sql);
      $row = $result->getResult();
      return $row;
    }

    public function deleteMutasi($id, $type)
    {

        switch ($type) {
          case '1':
              $table = 'data_penerimaan';
            break;
          case '2':
              $table = 'data_uraian';
            break;
          
          default:
              $table = 'data_anggota';
            break;
        }

        $builder = $this->db->table($table);
        $query   = $builder->where('id', $id);
        return  $query->delete();
    }
    
    public function deleteTabulasi($id)
    {
        $builder = $this->db->table('data_tabulasi');
        $query   = $builder->where('id', $id);
        return  $query->delete();
    }

    public function deleteSupervisi($id)
    {
        $builder = $this->db->table('data_supervisi');
        $query   = $builder->where('id', $id);
        return  $query->delete();
    }

    public function deleteCctv($id)
    {
        $builder = $this->db->table('data_cctv');
        $query   = $builder->where('id', $id);
        return  $query->delete();
    }

}
