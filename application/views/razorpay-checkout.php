<!DOCTYPE html>
<html>
<head>
  <title>Razorpay - Payment Process</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<script type="text/javascript">   
  window.onload = function(){
      razorpayPayment();
  }
</script>

	<form action="<?php echo $postData['successURL']; ?>" name="paymentForm" id="paymentForm" method="post">
      <p>Please wait.......</p>
      <input type="hidden" name="razorpaykey" id="razorpaykey" value='<?php echo RAZOR_KEY_ID; ?>'/>
      <input type="hidden" name="applyid" id="applyid" value='<?php echo $postData['applyid']; ?>'/>
      <input type="hidden" name="fullname" id="fullname" value='<?php echo $postData['fullname']; ?>'/>
      <input type="hidden" name="mobile" id="mobile" value='<?php echo $postData['mobile']; ?>'/>
      <input type="hidden" name="email" id="email" value='<?php echo $postData['email']; ?>'/>
      <input type="hidden" name="orderamount" id="orderamount" value='<?php echo $postData['orderamount']; ?>'/>
      <input type="hidden" name="orderid" id="orderid" value='<?php echo $postData['orderid']; ?>' />
      <input type="hidden" name="description" id="description" value='<?php echo $postData['description']; ?>'/>
      <input type="hidden" name="failURL" id="failURL" value='<?php echo $postData['failURL']; ?>' />
      <input type="hidden" name="paymentid" id="paymentid" value='' />
  </form>
  
<script src="https://checkout.razorpay.com/v1/checkout.js"></script> 
