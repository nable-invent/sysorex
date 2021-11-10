<form action="https://cgt.in.worldline.com/ipg/doMEPayRequest" method="post" name="txnSubmitFrm">
	<h4 align="center">Redirecting To Payment Please Wait..</h4>
	<h4 align="center">Please Do Not Press Back Button OR Refresh Page</h4>
	<input type="hidden" size="200" name="merchantRequest" id="merchantRequest" value="<?php echo $mReq; ?>"  />
	<input type="hidden" name="MID" id="MID" value="<?php echo $mid; ?>"/>
</form>
<script  type="text/javascript">
console.log("check");
	document.txnSubmitFrm.submit();
</script>