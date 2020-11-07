<!-- this view serves user with all stored book details -->
<html>
	<body>
		<table>

		<thead>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Description</th>
		</thead>

		<?php 
			foreach ($books as $key => $book){

		?>
			<tr>
				<td><a href="index.php?selectedBook=<?php echo $key; ?>"/>
					<?php echo $book->title; ?>
				</td>
				<td><?php echo $book->author; ?></td>
				<td><?php echo $book->description; ?></td>
			</tr>
		<?php
			}
		?>
		</table>
	</body>
</html>