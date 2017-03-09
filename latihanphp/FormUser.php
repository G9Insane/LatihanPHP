<h2>FORM USER</h2>
<form method="post" action="input_user.php">
<table>
<tr><td>Username</td>				<td> :	<input type=text name=username required> </td>
<tr><td>Password</td>				<td> :	<input type=password name=password id=password required> </td>
<tr><td>Confirm Password</td>		<td> :	<input type=password name=confirm_password id=confirm_password required> </td>
<tr><td>Nama Lengkap</td>			<td> :	<input type=text name=nama_lengkap required> </td>
<tr><td>Email</td>					<td> :	<input type=email name=email required> </td>
<tr><td>Level</td>					<td> :	<input type=radio name=level value=admin>admin
											<input type=radio name=level value=operator>operator</td></tr>
<tr><td>Status</td>					<td> : 	<input type=radio name=status value=aktif>aktif
											<input type=radio name=status value=non-aktif>non-aktif</td></tr>
			<tr><td colspan=2><input type=submit value=Simpan>
			<input type=button value=Batal onclick=self.history.back()></td></tr>
			</table></form>
