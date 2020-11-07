<?php
	include_once './Model/Model.php';

	class Controller{

		public $model;

		public function __construct(){
			$this->model = new Model();
		}

		public function invoke(){


			if(!isset($_GET['selectedBook'])){
				$books=$this->model->getBookDetails();
				include './View/bookList.php';	
			}else{
				$book = $this->model->getBook($_GET['selectedBook']);
				include './View/viewBook.php';		
			}
			

		}
	}


?>