<?php
require('../../../db.php');
include("../../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Customer Payments History -  Padya Bank</title>
<link rel="stylesheet" href="../../../css/style.css" />
</head>
<body>
<div class="form">
<p><a href="../../dashboard.php">Dashboard</a>
| <a href="../../../logout.php">Logout</a></p>
<h1>Customer Payments History</h1>
<?php 
$count=1;
$accountID=$_REQUEST['accountID'];
$loanID=$_REQUEST['loanID'];
echo "<h2>Payment for Loan number - ".$loanID."</h2>"?>

<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>S.no</strong></th>
<th><strong>Payment ID</strong></th>
<th><strong>Payment Date</strong></th>
<th><strong>Payment Amount</strong></th>
<th><strong>Remarks</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$accountID=$_REQUEST['accountID'];
$loanID=$_REQUEST['loanID'];

$sel_query="Select * from `payment` where loanID = '".$loanID."';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
    ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["paymentID"]; ?></td>
<td align="center"><?php echo $row["paymentDate"]; ?></td>
<td align="center"><?php echo $row["paymentAmount"]; ?></td>
<td align="center"><?php echo $row["remarks"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
<break><a href="view.php?&accountID=<?php echo $accountID ?>">Go Back</a>

</div>
</body>
</html>