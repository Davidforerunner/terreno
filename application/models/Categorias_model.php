<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias_model extends MY_Model {

	function __construct(){
		parent::__construct();
		$this->TABLE_NAME = "categorias";
		$this->PRI_INDEX = "id_categoria";
	}

}
