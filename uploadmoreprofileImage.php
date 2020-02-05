<?php session_start();
	if($_SESSION["email"]==null)
	{
		header("location: login#login-popup");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Upload New Image</title>
<script></script>
<style type="text/css">

#upload {
	opacity: 0;
}

#upload-label {
	position: absolute;
	top: 50%;
	left: 1rem;
	transform: translateY(-50%);
}

.image-area {
	border: 2px dashed rgba(255, 255, 255, 0.7);
	padding: 1rem;
	position: relative;
}

.image-area::before {
	content: 'Uploaded image result';
	color: #fff;
	font-weight: bold;
	text-transform: uppercase;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	font-size: 0.8rem;
	z-index: 1;
}

.image-area img {
	z-index: 2;
	position: relative;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/
body {
	min-height: 100vh;
	background-color: #757f9a;
	background-image: linear-gradient(147deg, #757f9a 0%, #d7dde8 100%);
}
/
*
</style>
<link rel="stylesheet" href="bootstrap/bootstrap.css">
<script src="jquery/jquery-1.8.3.min.js"></script>
</head>
<body>
<?php
/* <%
	System.out.println("Enter into uploadImg.jsp");
	String imgno=request.getParameter("msg");
	session.setAttribute("imgno", imgno);
	System.out.println(imgno);
%> */
?>
<?php
	if(isset($_GET["msg"])==1)
	{
		$_SESSION["msg"]=$_GET["msg"];
	}
?>
	<form action="database/newprofileimage?msg=<?php echo $_GET["msg"];?>"
		enctype="multipart/form-data" method="post">
		<div class="container py-5">
			<div class="row py-4">

				<div class="col-lg-6 mx-auto">

					<!-- Upload image input-->
					<h1 style="text-align: center;">Upload New Image</h1>
					<h5 style="color:red;"><?php 
							if(isset($_SESSION["msg1"]))
							{
								echo $_SESSION["msg1"];
								unset($_SESSION["msg1"]);
							}
					?></h5>
					<div
						class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm">
						<input id="upload" type="file" onchange="readURL(this);"
							class="form-control border-0" name="img"> <label
							id="upload-label" for="upload"
							class="font-weight-light text-muted">Choose file</label>
						<div class="input-group-append">
							<label for="upload" class="btn btn-light m-0 rounded-pill px-4">
								<i class="fa fa-cloud-upload mr-2 text-muted"></i><small
								class="text-uppercase font-weight-bold text-muted">Choose
									file</small>
							</label>
						</div>
					</div>


					<!-- Uploaded image area-->
					<p class="font-italic text-white text-center">The image
						uploaded will be rendered inside the box below.</p>
					<div class="image-area mt-4">
						<img id="imageResult" src="#" alt=""
							class="img-fluid rounded shadow-sm mx-auto d-block">
					</div>
					<p class="font-italic text-white text-center">
						<input type="submit" value="Upload"></i>
					</p>
				</div>

			</div>
		</div>
	</form>
	<script>
  
/*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
          $('#imageResult')
              .attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}

$(function () {
  $('#upload').on('change', function () {
      readURL(input);
  });
});

/*  ==========================================
  SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
var input = event.srcElement;
var fileName = input.files[0].name;
infoArea.textContent = 'File name: ' + fileName;
}

</script>
</body>
</html>