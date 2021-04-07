<?php 
 
namespace App\Controllers;

use App\Models\BackendModel;
use App\Models\UserModel;
use CodeIgniter\Controller; 
 
class Backend extends BaseController
{
	// show users list
	public function index()
	{
		$userModel = new UserModel();
		$data['users'] = $userModel->orderBy('id', 'DESC')->findAll();
		return view('backend/layout', $data);
	}

	// add user form
	public function create()
	{
			return view('backend/add_user');
	}

	// insert data
	public function store() 
	{
		$userModel = new UserModel();
		$data = [
				'first_name' => $this->request->getPost('first_name'),
				'last_name' => $this->request->getPost('last_name'),
				'no_hp' => $this->request->getPost('no_hp'),
				'email'  => $this->request->getPost('email'),
				'password'  => $this->request->getPost('password'),
				'alamat' => $this->request->getPost('alamat'),
		];
		$userModel->insert($data);
		return $this->response->redirect(site_url('/users-list'));
	}

	public function singleUser($id = null){
		$userModel = new UserModel();
		$data['user_obj'] = $userModel->where('id', $id)->first();
		return view('backend/edit_user', $data);
	}

	// update user data
	public function update()
	{
		$userModel = new UserModel();
		$id = $this->request->getVar('id');
		$data = [
			'first_name' => $this->request->getPost('first_name'),
			'last_name' => $this->request->getPost('last_name'),
			'no_hp' => $this->request->getPost('no_hp'),
			'email'  => $this->request->getPost('email'),
			'alamat' => $this->request->getPost('alamat'),
		];
		$userModel->update($id, $data);
		return $this->response->redirect(site_url('/users-list'));
	}

	// delete user
	public function delete($id = null)
	{
			$userModel = new UserModel();
			$data['user'] = $userModel->where('id', $id)->delete($id);
			return $this->response->redirect(site_url('/users-list'));
	}  

} 