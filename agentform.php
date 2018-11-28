<!DOCTYPE html>
<!-- 
Agent form to a new agent to the database
-->


<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Include</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"></link>
		<script src="jquery/jquery.min.js"></script>
		<script src="popper/popper.min.js"></script>
	    <script src="js/bootstrap.min.js"></script>
		
		<script>
			   	//validaion function to check all the fields are filled in, in specific format	 	 
   $(document).ready(function(){
   $('#agentsubmit').click(function(){
        if ($('#AgtFirstName').val() == ""){
            alert('Please complete the field');
           $('#AgtFirstName').focus();
         
            return false;           
											}

		      if ($('#AgtMiddleInitial').val() == ""){
            alert('Please complete the field');
           $('#AgtMiddleInitial').focus();
         
            return false;           
													 }

		     if ($('#AgtLastName').val() == ""){
            alert('Please complete the field');
           $('#AgtLastName').focus();
         
            return false;           
													}
		

		  if ($('#AgtBusPhone').val() == ""){
            alert('Please complete the field');
           $('#AgtBusPhone').focus();
         
            return false;           
											}
		
		
		  if ($('#AgtEmail').val() == ""){
            alert('Please complete the field');
           $('#AgtEmail').focus();
         
            return false;           
										 }
		
		  if ($('#AgtPosition').val() == ""){
            alert('Please complete the field');
           $('#AgtPosition').focus();
         
            return false;           
											 }
		

		   });
});
       
	   	</script>


		</head>

		<body>
<div class="container">
	<div class="row">
		<div class=col-6>
			<div class="card" style="width: 100%">
				 <div class="card-header alert alert-danger"  >
					<div class="card-body">
		<p> <a href="allagents.php" id="allagents">To see all Agents click here</a></p>
		<p> To become an Agent please fill the following Form</p>
		<form name="form1 method="POST" action="insertagent.php">
							 <div class="form-group">
  <label for="AgtFirstName"> Agent First Name</label>
   <input class="form-control form-control-lg" placeholder="First Name" type="text" id="AgtFirstName" name="AgtFirstName" >
  
  <label for="AgtMiddleInitial"> Agent Middle Name</label>
   <input class="form-control form-control-lg" placeholder="Middle Initial" type="text" id="AgtMiddleInitial" name="AgtMiddleInitial" >

   <label for="AgtLastName"> Agent Last Name</label>
   <input class="form-control form-control-lg" placeholder="Last Name" type="text" id="AgtLastName" name="AgtLastName" >

    <label for="AgtBusPhone"> Agent Business Phone</label>
   <input class="form-control form-control-lg" placeholder="000-0000000" type="text" id="AgtBusPhone" name="AgtBusPhone" >
   
   <label for="AgtEmail"> Agent email</label>
   <input class="form-control form-control-lg" placeholder="abc@xyz.com" type="email" id="AgtEmail" name="AgtEmail" >
    
	<label for="AgtPosition"> Agent Position</label>
   <input class="form-control form-control-lg" placeholder="Agent Position" type="text" id="AgtPosition" name="AgtPosition" >
		
	<label for="AgencyId"> Agency</label>
   <select class="form-control form-control-lg"  id="AgencyId" name="AgencyId" >
   <option value="Calgary" selected>Calgary</option>
   <option vlaue="Okotoks">Okotoks</option>
   </select>
   
   
    <button type="submit" class="btn btn-primary" id="agentsubmit">Register Agent</button>
		
		</form>
					</div>
				 </div>
			</div>
		</div>
	</div>
 </div>
 </div>
	</body>
</html>