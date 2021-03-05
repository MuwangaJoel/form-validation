<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savecustomer.php" method="post">
<center><h4><i class="icon-plus-sign icon-large"></i> Add Customer</h4></center>
<hr>
<div id="ac">
<span>Customer ID : </span><input type="text" style="width:265px; height:30px;" name="name" placeholder="Customer ID" /><br>
<span>Customer Name: </span><input type="text" style="width:265px; height:30px;" name="prod_name" placeholder="Full Name" Required /><br>
<span>Address : </span><textarea style="height:30x; width:265px;" name="address" placeholder="Address"></textarea><br>
<span>Contact : </span><input type="text" style="width:265px; height:30px;" name="contact" placeholder="Phone No" Required /><br>

<span>Note : </span><textarea style="height:60px; width:265px;" name="note"></textarea><br>

<div style="float:right; margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width:267px;"><i class="icon icon-save icon-large"></i> Save</button>
</div>
</div>
</form>
