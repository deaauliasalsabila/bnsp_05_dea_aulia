<?php echo form_open(); ?>

<h1>Login</h1>
<?php validation_errors(); ?>
<table>
	
		<tr>
			<td>username</td>
			<td><input type="text" name="username" value="" placeholder=""></td>
			<td></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td colspan="2"><input type="submit" value="save"></td>
			
		</tr>
	
</table>
<?php echo form_close(); ?>