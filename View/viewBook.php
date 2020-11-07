 <!-- this view serves user with selected title's book details -->
<html>
	<body>
		<table>
		<thead>
				<th>Book Title</th>
				<th>Book Author</th>
				<th>Book Description</th>
		</thead>
			<tr>
				<td><?php echo $book->title; ?></td>
				<td><?php echo $book->author; ?></td>
				<td><?php echo $book->description; ?></td>
			</tr>
		</table>
	</body>
</html>