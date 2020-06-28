<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
 
	public function __construct(){
		parent::__construct();
		$this->load->model('WebModel');
	}

	public function index()
	{
		$this->load->view('web/header');
		$this->load->view('web/index');
		$this->load->view('web/footer');
	}

	public function shop()
	{
		$data['product_list'] = $this->WebModel->Get_ProductList();

		$this->load->view('web/header');
		$this->load->view('web/shop',$data);
		$this->load->view('web/footer');
	}

	public function product_details($product_name = NULL,$product_ID = NULL)
	{
		if($product_name != NULL && $product_ID != NULL)
		{
			$product_name = urldecode($product_name);
			$product_ID   = $this->encrypt->decode(urldecode($product_ID));
		}
		
		$data['product_view'] = $this->WebModel->Get_SingleProduct($product_name,$product_ID);  
		$data['product_atrb'] = $this->WebModel->Get_SingleProductAttributes($product_name,$product_ID);  

		$this->load->view('web/header');
		$this->load->view('web/product_details',$data);
		$this->load->view('web/footer');
	}
 
	public function AddProductAttributes()
	{
		$this->WebModel->Update_ProductAttributes();
		$data['product_list'] = $this->WebModel->Get_ProductList();

		$this->load->view('web/header');
		$this->load->view('web/AddProductAttributes',$data);
		$this->load->view('web/footer');
	}
 
	public function SearchProductAttribute()
	{ 
		$data['product_list'] = $this->WebModel->SearchProductAttribute(); 

		var_dump($data);
	}
}
