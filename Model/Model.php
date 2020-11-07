<?php

	include 'Book.php';

	Class Model{

		//this function returns the value of all stored book's data
		public function getBookDetails(){

			// $allBookDetails = new array("book1" => new Book('title1','author1','descrip1'),
			// 				  "book2" => new Book('title2','author2','descrip2'),
			// 				  "book3" => new Book('title3','author3','descrip3')
			// 				 );

			return array("book1" => new Book('Complete Reference of PHP','Paras Kalariya','Awesome book of PHP'),
						 "book2" => new Book('Complete Reference of Javascript','Mc. Millan','Awesome book of JS'),
						 "book3" => new Book('Complete Reference of MVC','Mc. Millan','Awesome book of MVC'),
						 "book4" => new Book('Complete Reference of PHP','Paras Kalariya','Awesome book of PHP'),
						 "book5" => new Book('Complete Reference of Javascript','Mc. Millan','Awesome book of JS'),
						 "book6" => new Book('Complete Reference of MVC','Mc. Millan','Awesome book of MVC'),
						 "book7" => new Book('Complete Reference of PHP','Paras Kalariya','Awesome book of PHP'),
						 "book8" => new Book('Complete Reference of Javascript','Mc. Millan','Awesome book of JS'),
						 "book9" => new Book('Complete Reference of MVC','Mc. Millan','Awesome book of MVC')
						);
		}

		//this function returns the selected title's book data
		public function getBook($title){

			$allBooks = $this->getBookDetails();

			return $allBooks[$title];
		}
	}
?>