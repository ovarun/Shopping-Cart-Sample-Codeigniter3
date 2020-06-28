<?php

class WebModel extends CI_Model {

	public function Get_ProductList(){
		/*Retrive all products from the product_list table*/
		$this->db->select('*');
		$this->db->from('product_list');
		$query = $this->db->get();
		return $query->result();
	}

	public function Get_SingleProduct($product_name,$product_ID){
		/*Retrive details of the single product by the product id (primary key)*/ 
		if($product_ID != NULL){
			$this->db->select('*');
			$this->db->from('product_list');
			$this->db->where('product_ID',$product_ID); 
			$query = $this->db->get();
			return $query->result();
		}else{
			return NULL;
		}
	}

	public function Get_SingleProductAttributes($product_name,$product_ID){
		/*Retrive details of the single product Attributes by the product id (foregin key)*/ 
		if($product_ID != NULL){
			$this->db->select('*');
			$this->db->from('product_attrbutes');
			$this->db->where('product_ID',$product_ID); 
			$query = $this->db->get();
			return $query->result();
		}else{
			return NULL;
		}
	}
 
	public function Update_ProductAttributes()
	{
		/*Update The Attributed of the products in product_list table*/ 
		if(!empty($_POST)){ 
			$product_ID = $this->input->post('product_ID');
			$quantity   = $this->input->post('product_quantity');
			$price      = $this->input->post('product_price');
			$color      = $this->input->post('product_color');
			$size       = $this->input->post('product_size');

			$data = array(
				'product_ID'       => $product_ID, 
				'stock_count'      => $quantity, 
				'price_for_single' => $price, 
				'color'            => $color, 
				'size'             => $size, 
			);
			$this->db->insert('product_attrbutes',$data);	
		}
	}
 
	public function SearchProductAttribute()
	{
		/*Update The Attributed of the products in product_list table*/ 
		if(!empty($_POST)){ 
			$product_ID = $this->input->post('product_ID');
			$color      = $this->input->post('product_color');
			$size       = $this->input->post('product_size'); 
			$stock_count= $this->input->post('qty'); 

			$data = array(
				'product_ID'       => $product_ID,    
				'color'            => $color, 
				'size'             => $size, 
			);
			$this->db->select('price_for_single');
			$this->db->from('product_attrbutes');
			$this->db->where($data);
			$query = $this->db->get();
			return $query->result(); 
		}
	}

}