<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

    include ("header.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="GENERATOR" content="Evrsoft First Page">


    <!-- Boostrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Fontawesome Link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>OnlineZen</title>
</head>
<body>
<h2 class="text-center mt-3">Welcome to OnlineZen</h2>
	<pre>
	</pre>
	<form method="post" class="d-flex justify-content-center  pt-3 pb-3 ps-3 pe-3 " action="Paytmkit/pgRedirect.php">
		<table class="bg-black  border border-1 rounded text-white pt-1 border="1">
			<tbody class="pt-3">
				<tr>
					<th class="fw-semibold">S.No</th>
					<th class="fw-semibold">Label</th>
					<th class="fw-semibold">Value</th>
				</tr>
				<tr>
					<td>1</td>
					<td><label>ORDER_ID:</label></td>
					<td><input class="mt-3 mt-3 " id="ORDER_ID" tabindex="1" maxlength="20" size="20"
						name="ORDER_ID" autocomplete="off"
						value="<?php echo  "ORDS" . rand(10000,99999999)?>">
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td><label>Student Email ID:</label></td>
					<td><input class="mt-3 mt-3"id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" ></td>
				</tr>
				
				<tr>
					<td>5</td>
					<td><label>Amount</label></td>
					<td><input class="mt-3 mt-3" title="TXN_AMOUNT" tabindex="10"
						type="text" name="TXN_AMOUNT"
						value="1">
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input class="btn btn-success mt-3" value="CheckOut" type="submit"	onclick="">
                    <input class="btn btn-secondary mt-3" value="Cancel" type="submit"></td>
				</tr>
			</tbody>
		</table>
		<!-- * - Mandatory Fields -->
	</form>

</body>
</html>

<?php
	
    include ("footer.php")

?>