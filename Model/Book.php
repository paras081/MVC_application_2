<?php

	class Book{

		public $title;
		public $author;
		public $description;


		public function __construct($title,$author,$description){
			$this->title=$title;
			$this->author=$author;
			$this->description=$description;
		}

		// $objBook = new Book();
		// $objBook = new Book('title1','autho1','desc1');
	}

?>