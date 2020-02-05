
<?php session_start();
	if($_SESSION["email"]==null)
	{
		header("location: login#login-popup");
	}
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wedding Organizer Wedding Category Flat Bootstrap Responsive Website Template | Home : W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		
	 $(document).ready(function () {
		$("#recipient-name112").click(function () {
			$("#f").html("<input type='text' class='form-control' placeholder='Enter Country' name='country'/><br><input type='text' class='form-control' placeholder='Enter state' name='state'/><br><input type='text' class='form-control' placeholder='Enter city' name='city'/>");
		});
		$("#recipient-name111").click(function () {
			$("#f").html("");
		});
	});
	 
	</script>
	<!--// Meta tag Keywords -->
    
	<!-- css files --><!-- "WebContent/register.jsp" -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/font-awesome.min.css"> <!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="css/CompliteProfile.css">
	<!-- //css files -->

	<!--web font-->
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext,vietnamese" rel="stylesheet">
	<!--//web font-->
	<script type="text/javascript" src="js/registerValidate.js"></script>
	<style>
		.error {
	color: red
}
	</style>
</head>

<body>
				
    <div id="logodiv">
        <div id="logo2">
            <h1>
                <p class="navbar-brand">
                    <span></span>Wedding <span>
                        <span class="line"></span>Organizer</span>
                </p>
            </h1>
        </div>
        <p class="col-sm-10 com">
            Complete your profile to get more responses
        </p>
        <a href="home"class="skip">I'll do this later �</a>
    </div>
	<div  class="complit" >
		<div class="popup" style="top:-100px;">
		<div class="fa fa-file-text file" style="color:red;font-size: 20px;"></div>
			<h5 class="modal-title text-uppercase ">Basic Information</h5>
		
			<div>
				<form action="database/compliteProfile" method="post" class="px-3 pt-3 pb-0" name="register" id="form">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Body Type</label><br>
						<input type="radio" name="body" value="slim" id="recipient-name100" >Slim
						&nbsp;&nbsp;&nbsp;<input type="radio" name="body" value="Average" id="recipient-name100">Average<br>
						<input type="radio" name="body" value="Athletic" id="recipient-name100">Athletic
						<input type="radio" name="body" value="Heavy" id="recipient-name100">Heavy							
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">
							Weight</label>
							<select class="form-control " name="weight" id="recipient-name101">
								 <option value="">Select Weight </option>
                                <option value="41">41 kg</option>
                                <option value="42">42 kg</option>
                                <option value="43">43 kg</option>
                                <option value="44">44 kg</option>
                                <option value="45">45 kg</option>
                                <option value="46">46 kg</option>
                                <option value="47">47 kg</option>
                                <option value="48">48 kg</option>
                                <option value="49">49 kg</option>
                                <option value="50">50 kg</option>
                                <option value="51">51 kg</option>
                                <option value="52">52 kg</option>
                                <option value="53">53 kg</option>
                                <option value="54">54 kg</option>
                                <option value="55">55 kg</option>
                                <option value="56">56 kg</option>
                                <option value="57">57 kg</option>
                                <option value="58">58 kg</option>
                                <option value="59">59 kg</option>
                                <option value="60">60 kg</option>
                                <option value="61">61 kg</option>
                                <option value="62">62 kg</option>
                                <option value="63">63 kg</option>
                                <option value="64">64 kg</option>
                                <option value="65">65 kg</option>
                                <option value="66">66 kg</option>
                                <option value="67">67 kg</option>
                                <option value="68">68 kg</option>
                                <option value="69">69 kg</option>
                                <option value="70">70 kg</option>
                                <option value="71">71 kg</option>
                                <option value="72">72 kg</option>
                                <option value="73">73 kg</option>
                                <option value="74">74 kg</option>
                                <option value="75">75 kg</option>
                                <option value="76">76 kg</option>
                                <option value="77">77 kg</option>
                                <option value="78">78 kg</option>
                                <option value="79">79 kg</option>
                                <option value="80">80 kg</option>
                                <option value="81">81 kg</option>
                                <option value="82">82 kg</option>
                                <option value="83">83 kg</option>
                                <option value="84">84 kg</option>
                                <option value="85">85 kg</option>
                                <option value="86">86 kg</option>
                                <option value="87">87 kg</option>
                                <option value="88">88 kg</option>
                                <option value="89">89 kg</option>
                                <option value="90">90 kg</option>
                                <option value="91">91 kg</option>
                                <option value="92">92 kg</option>
                                <option value="93">93 kg</option>
                                <option value="94">94 kg</option>
                                <option value="95">95 kg</option>
                                <option value="96">96 kg</option>
                                <option value="97">97 kg</option>
                                <option value="98">98 kg</option>
                                <option value="99">99 kg</option>
                                <option value="100">100 kg</option>
                                <option value="101">101 kg</option>
                                <option value="102">102 kg</option>
                                <option value="103">103 kg</option>
                                <option value="104">104 kg</option>
                                <option value="105">105 kg</option>
                                <option value="106">106 kg</option>
                                <option value="107">107 kg</option>
                                <option value="108">108 kg</option>
                                <option value="109">109 kg</option>
                                <option value="110">110 kg</option>
                                <option value="111">111 kg</option>
                                <option value="112">112 kg</option>
                                <option value="113">113 kg</option>
                                <option value="114">114 kg</option>
                                <option value="115">115 kg</option>
                                <option value="116">116 kg</option>
                                <option value="117">117 kg</option>
                                <option value="118">118 kg</option>
                                <option value="119">119 kg</option>
                                <option value="120">120 kg</option>
                                <option value="121">121 kg</option>
                                <option value="122">122 kg</option>
                                <option value="123">123 kg</option>
                                <option value="124">124 kg</option>
                                <option value="125">125 kg</option>
                                <option value="126">126 kg</option>
                                <option value="127">127 kg</option>
                                <option value="128">128 kg</option>
                                <option value="129">129 kg</option>
                                <option value="130">130 kg</option>
                                <option value="131">131 kg</option>
                                <option value="132">132 kg</option>
                                <option value="133">133 kg</option>
                                <option value="134">134 kg</option>
                                <option value="135">135 kg</option>
                                <option value="136">136 kg</option>
                                <option value="137">137 kg</option>
                                <option value="138">138 kg</option>
                                <option value="139">139 kg</option>
                                <option value="140">140 kg</option>
							</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">College / Institution
							</label> <input type="text" class="form-control" placeholder="Enter College / Institution"
							name="college" id="recipient-name102" >
					</div>
					<div class="fa fa-coffee" style="color:red;font-size: 25px;"></div>
						<h5 class="modal-title text-uppercase" style="margin-top: -7px;">Lifestyle Info</h5>
					
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Eating Habit	</label> <br>
							<input type="radio"name="Eating" id="recipient-name104" value="Vegetarian">Vegetarian 
							<input type="radio"name="Eating" id="recipient-name104" value="Non-Vegetarian">Non-Vegetarian 
							&nbsp;<input type="radio"name="Eating" id="recipient-name104" value="Eggetarian">Eggetarian 
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Drinking Habit</label> <br>
							<input type="radio"name="Drinking" id="recipient-name105" value="No">NO 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"name="Drinking" id="recipient-name105" value="Drinks Socially ">Drinks Socially 
							<input type="radio"name="Drinking" id="recipient-name105" value="Yes">Yes 
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Smoking Habit</label> <br>
							<input type="radio"name="Smoking" id="recipient-name106" value="Vegetarian">No 
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"name="Smoking" id="recipient-name106" value="Occasionally">Occasionally 
							&nbsp;&nbsp;&nbsp;<input type="radio"name="Smoking" id="recipient-name106" value="Yes">Yes 
					</div>
					<div class="fa fa-book" style="color:red;font-size: 25px;"></div>
						<h5 class="modal-title text-uppercase life" style="margin-top: -7px;">Religion Information</h5>
						<div class="form-group">
						<label for="recipient-name" class="col-form-label">Raasi</label>
							<input type="text"name="Raasi" id="recipient-name107" class="form-control" placeholder="Enter Raasi">
					</div>
					<div class="fa fa-book" style="color:red;font-size: 25px;"></div>
						<h5 class="modal-title text-uppercase life" style="margin-top: -7px;">Horoscope Details</h5>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Time of Birth</label><br>
							<input type="time" name="date" id="recipient-name107" class="form-control" placeholder="Enter hr-min-am/pm">
							<label for="recipient-name" class="col-form-label">Place of Birth</label>
							<input type="text" class="form-control" id="recipient-name109" placeholder="Enter Country" name="country">
						</div>
						<div class="fa fa-address-book" style="color:red;font-size: 25px;"></div>
						<h5 class="modal-title text-uppercase life" style="margin-top: -7px;">Family Information</h5>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Father Status</label>
								<select name="FatherStatus" class="form-control" id="recipient-name110">
									<option value="">Select Father Status </option>
									<option value="Employed">Employed</option>
									<option value="Business">Business Man</option>
									<option value="Professional">Professional</option>
									<option value="Retired">Retired</option>
									<option value="Not Employed">Not Employed</option>
									<option value="Passed Away">Passed Away</option>
								</select>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Mother Status</label>
								<select name="MotherStatus" class="form-control"id="recipient-name110">
									<option value="" selected="selected">Select Mother Status </option>
									<option value="Homemaker">Homemaker</option>
									<option value="Employed">Employed</option>
									<option value="Business Woman">Business Woman</option>
									<option value="Professional">Professional</option>
									<option value="Retired">Retired</option>
									<option value="Passed Away">Passed Away</option>
								</select>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Brothers</label>
								<select name="Brothers" class="form-control" id="recipient-name110">
									<option value="">Brothers</option>
									<option value="none">none</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="5+">5+</option>
								</select>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Sister</label>
								<select name="sister" class="form-control" id="recipient-name110">
									<option value="">Sisters</option>
									<option value="none">none</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="5+">5+</option>
								</select>
						</div>
							
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Parent's Contact No</label>
								<input type="text" class="form-control" placeholder="Enter Parent's Contact No" name="no">
						</div>
					
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Next">
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.3.min.js"></script>
	<script
		src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
	<script
		src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/additional-methods.min.js"></script>
	<script type="text/javascript" src="js/registerValidate.js"></script> -->
	 <script type="text/javascript">
	   $(document).ready(function(){
		   $.validator.addMethod('strongPassword', function(value, element) {
			    return this.optional(element) 
			      || value.length >= 6
			      && /\d/.test(value)
			      && /[a-z]/i.test(value);
			  }, 'Your password must be at least 6 characters long and contain at least one number and one char\'.')

		  $("#form") .validate({
			  rules:
				  {
					height:
					  {
					      required:true,
					  },
				      body:
				    	  {
				    	          required:true,       
				    	  },
				    	  weight:
				    		  {
				    		        required:true,
				    		  },
							  college:
				    		  {
				    		        required:true,
							  },
				    		  Eating:
				    			  {
				    			      required:true,
				    			  },
								  Drinking:
				    			  {
				    			         required:true,
				    			  },
				    			  Smoking:
				    				  {
				    				      required:true,
									  },
									  Raasi:
										{
												required:true,
										},
										hrs:
											{
													required:true,
											},
											min:
											{
													required:true,
											},
											AMPM:
											{
													required:true,
											},
											country:
											{
													required:true,
											},
											state:
											{
													required:true,
											},
											city:
											{
													required:true,
											},
											FatherStatus:
											{
													required:true,
											},
											MotherStatus:
											{
													required:true,
											},
											Brothers:
											{
													required:true,
											},
											sister:
											{
													required:true,
											},
											no:
											{
													required:true,
													maxlength:10,
											}
				    			 
				  },
		  });
	   });
	</script>


</body>
</html>