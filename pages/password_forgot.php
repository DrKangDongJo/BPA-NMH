<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Forget Password</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
		  <div class="col-md-6">
			<div class="card mt-4">
			  <div class="card-body">
				<h4 class="card-title">Forgot Password</h4>
				<p class="card-text">Please provide the email address that you used when you signed up for your account.</p>
				<form id="forgotPasswordForm">
				  <div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Reset Password</button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	
	  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	  <script>
		$(document).ready(function() {
		  $("#forgotPasswordForm").submit(function(event) {
			event.preventDefault();
			

			window.location.href = "Resetpass.html";
		  });
		});
	  </script>

</body>
</html>