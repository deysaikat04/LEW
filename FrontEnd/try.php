<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="trysave.php" method="post">
<table>
	<tr>
		<td>Tax</td>	<td><input type="text" name="taxNo" class="form-control qnty"></td>
		<td>Qnty</td>	<td><input type="text" name="qnty[]" class="form-control qnty"></td>
		<td>HSNC</td>	<td><input type="text" name="hsn[]" class="form-control hsn"></td>
		<td>Descr</td>	<td> <input type="text" name="desp[]" class="form-control desp"></td>
		<td>Rate</td>	<td><input type="text" name="rate[]" class="form-control rate"></td>
		<td>Unit</td>	<td><input type="text" name="unit[]" class="form-control unit" value="Each"></td>
		<td>Amnt</td>	<td> <input type="text" name="amnt[]" class="form-control amnt"></td>
	</tr>
	<tr>
		<td></td><td></td>
		<td>Qnty</td>	<td><input type="text" name="qnty[]" class="form-control qnty"></td>
		<td>HSNC</td>	<td><input type="text" name="hsn[]" class="form-control hsn"></td>
		<td>Descr</td>	<td> <input type="text" name="desp[]" class="form-control desp"></td>
		<td>Rate</td>	<td><input type="text" name="rate[]" class="form-control rate"></td>
		<td>Unit</td>	<td><input type="text" name="unit[]" class="form-control unit" value="Each"></td>
		<td>Amnt</td>	<td> <input type="text" name="amnt[]" class="form-control amnt"></td>
	</tr>
</table>


<input type="submit" name="submit">

</form>
</body>
</html>