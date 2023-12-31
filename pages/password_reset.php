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
          <div class="col-md-6 w-75">
            <div class="card mt-4">
              <div class="card-body">
                <h2 class="card-title">Reset Password</h2>
                <p>An OTP has been sent to your email to set your password and is valid for 30 minutes</p>
                <form id="otpForm" action="#" method="POST">
                  <div class="form-group">
                    <label for="otp"><b>Please enter the OTP here</b></label>
                    <input type="text" class="form-control" id="otp" name="otp" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit OTP</button>
                  <h6>Not received an OTP?</h6>
                  <a href="">Resend OTP</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    
      <!-- Modal for resetting password -->
      <div class="modal fade" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="resetPasswordModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="resetPasswordModalLabel">Reset Password</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="resetPasswordForm" action="#" method="POST">
                <div class="form-group">
                  <label for="newPassword">New Password</label>
                  <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                </div>
                <div class="form-group">
                  <label for="confirmPassword">Confirm Password</label>
                  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                </div>
                <button type="submit" class="btn btn-primary">Reset Password</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
      <script>
        $(document).ready(function() {
          $("#otpForm").submit(function(event) {
            event.preventDefault();
    
        
            $("#resetPasswordModal").modal("show");
          });
    
          $("#resetPasswordForm").submit(function(event) {
            event.preventDefault();
    

          });
        });
      </script>
</body>
</html>
