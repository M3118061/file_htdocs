<?php
namespace App\Models;
use CodeIgniter\Model;

class M_User extends Model {
  protected $table = 'users';
  protected $primaryKey = 'id';
  protected $allowedFields = [
    'first_name',
    'last_name',
    'email',
    'password',
    'date_created',
    'date_update'
  ];

}
?>