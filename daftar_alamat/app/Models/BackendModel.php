<?php
namespace App\Models;

use CodeIgniter\Model;

class BackendModel extends Model
{
  public function get_users()
  {
    $users = $this->db->table('users');
    return $users->get();
  }

  public function add_users($data)
  {
    $query = $this->db->table('users')->insert($data);
    return $query;
  }

  public function update_users($data, $id)
  {
    $query = $this->db->table('users')->update($data, ['id' => $id]);
    return $query;
  }

  public function delete_users($id)
  {
    $query = $this->db->table('users')->delete(['id' => $id]);
    return $query;
  }
}
?>