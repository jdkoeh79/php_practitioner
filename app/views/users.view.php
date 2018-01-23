<?php require('partials/header.php'); ?>

<h1>All Users</h1>

<table>
	<tr>
		<th style="width: 100px; text-align: left;">
			Name
		</th>
		<th>
			Action
		</th>
	</tr>

	<?php foreach ($users as $user) : ?>
		<tr>
			<td>
				<?= $user->name; ?>
			</td>
			<td>
				<button onclick="deleteUser(<?= $user->id ?>)">Delete</button>
			</td>
		</tr>
	<?php endforeach; ?>

</table>

<h1>Submit Your Name</h1>

<form method="POST" action="/users">
	<input name="name" type="text"></input>
	<button type="submit">Submit</button>
</form>


<script>

function deleteUser(user_id) 
{
    $.ajax({
    	url: "/users/remove",
    	type: "POST",
        data: {"id": user_id},
        success: function(result) {
        	setTimeout(location.reload(), 0);
        }
    });
}

</script>
<?php require('partials/footer.php'); ?>
