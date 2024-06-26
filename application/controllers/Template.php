<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {


	public function index(){
		$templates = array('header' =>'_templates/header',
							'sidebar' => '_templates/sidebar',
							'footer' => '_templates/footer',
							'konten' => 'content/satu',
							'titles' => "NAKED-FX",
							'libjs' => ['satu','dua']
		);

	

		$this->load->view('base', $templates);
		

	}

	public function apis(){
		
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:5000/api/alls');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
]);

$response = curl_exec($ch);
curl_close($ch);

print_r($response);

	}


}
