<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo '<pre>';
		$this->load->model('user_model');
		$users = $this->user_model->with_post()->get(2);
		print_r($users);
		die;

		$this->load->model('post_model');
		$data = array("title" => "test 2", "description" => "testing...", "user_id" => 2);
		$this->post_model->insert($data);
		die;
		$data = array("fname" => "junaid", "lname" => "shahid", "status" => 1);
		$this->user_model->insert($data);
		die;
		$this->load->view('welcome_message');
	}

	public function testing_doctrine()
	{
		// taking help from it
		//https://github.com/wildlyinaccurate/CodeIgniter-with-Doctrine-2
		$this->load->library('doctrine');
		$group = new Entity\UserGroup;
		$group->setName('Users');

		$user = new Entity\User;
		$user->setUsername('wildlyinaccurate');
		$user->setPassword('Passw0rd');
		$user->setEmail('wildlyinaccurate@gmail.com');
		$user->setGroup($group);

		// When you have set up your database, you can persist these entities:
		//$em = $this->doctrine->em;
		//$em->persist($group);
		//$em->persist($user);
		//$em->flush();
		//die();
		$this->load->view('testing_doctrine', array(
			'user' => $user,
			'group' => $group,
		));

	}
}
