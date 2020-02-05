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
<title>Wedding Organizer Wedding Category Flat Bootstrap
	Responsive Website Template | Home : W3layouts</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords"
	content="Wedding Organizer web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="text/javascript" src="jquery/jquery-1.8.3.min.js"></script>

<script type="application/x-javascript">
	
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
		
		<!--select-->
		$(document).ready(function() {
			$("#recipient-name30").change(function() {
				var select=$("#recipient-name30").val();
				if (select=="Government" || select=="Private" || select=="Business" || select=="Defence" || select=="Self Employed") {
					$("#recipient-name34").html("<lable for='recipient-name' class='col-form-label'>Annual Income</lable><input type='text' name='income' class='form-control'/>");
						$("#recipient-name32").html("<lable for='recipient-name' class='col-form-label'>Work Location</lable><br>"+
																				"<lable for='recipient-name' class='col-form-label'>Country</lable><br>"+
																				"<select name='worklocation'class='form-control' id='recipient-name254'>"+
	                                                                            "<option value=''> Select Country </option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Afghanistan'>Afghanistan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Albania'>Albania</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Algeria'>Algeria</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='American Samoa'>American Samoa</option>"+ 
	                                                                            "<option style='color: rgb(0, 79, 0);'value='Andorra'>Andorra</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Angola'>Angola</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Anguilla'>Anguilla</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Antarctica'>Antarctica</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Antigua and Barbuda'>Antigua and Barbuda</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Argentina'>Argentina</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Armenia'>Armenia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Aruba'>Aruba</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Australia'>Australia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Austria'>Austria</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Azerbaijan'>Azerbaijan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bahamas'>Bahamas</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bahrain'>Bahrain</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bangladesh'>Bangladesh</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Barbados'>Barbados</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Belarus'>Belarus</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Belgium'>Belgium</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Belize'>Belize</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Benin'>Benin</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bermuda'>Bermuda</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bhutan'>Bhutan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bolivia'>Bolivia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Botswana'>Botswana</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bouvet Island'>Bouvet Island</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Brazil'>Brazil</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='British Indian Ocean Territory'>British Indian Ocean Territory</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='British Virgin Islands'>British Virgin Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Brunei'>Brunei</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Bulgaria'>Bulgaria</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Burkina Faso'>Burkina Faso</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Burundi'>Burundi</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cambodia'>Cambodia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cameroon'>Cameroon</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Canada'>Canada</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cape Verde'>Cape Verde</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cayman Islands'>Cayman Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Central African Republic'>Central African Republic</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Chad'>Chad</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Chile'>Chile</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='China'>China</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Christmas Island'>Christmas Island</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cocos Islands'>Cocos Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Colombia'>Colombia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Comoros'>Comoros</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Congo'>Congo</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cook Islands'>Cook Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Costa Rica'>Costa Rica</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Croatia'>Croatia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cuba'>Cuba</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Cyprus'>Cyprus</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Czech Republic'>Czech Republic</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Denmark'>Denmark</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Djibouti'>Djibouti</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Dominica'>Dominica</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Dominican Republic'>Dominican Republic</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='East Timor'>East Timor</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Ecuador'>Ecuador</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Egypt'>Egypt</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='El Salvador'>El Salvador</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Equatorial Guinea'>Equatorial Guinea</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Eritrea'>Eritrea</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Estonia'>Estonia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Ethiopia'>Ethiopia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Falkland Islands'>Falkland Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Faroe Islands'>Faroe Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Fiji'>Fiji</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Finland'>Finland</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='France'>France</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='French Guiana'>French Guiana</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='French Polynesia'>French Polynesia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='French Southern Territories'>French Southern Territories</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Gabon'>Gabon</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Gambia'>Gambia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Georgia'>Georgia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Germany'>Germany</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Ghana'>Ghana</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Gibraltar'>Gibraltar</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Greece'>Greece</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Greenland'>Greenland</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Grenada'>Grenada</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Guadeloupe'>Guadeloupe</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Guam'>Guam</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Guatemala'>Guatemala</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Guinea'>Guinea</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Guinea-Bissau'>Guinea-Bissau</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Guyana'>Guyana</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Haiti'>Haiti</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Heard and McDonald Islands'>Heard and McDonald Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Honduras'>Honduras</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Hong Kong'>Hong Kong</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Hungary'>Hungary</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Iceland'>Iceland</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='India'>India</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0);' value='Indonesia'>Indonesia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Iran'>Iran</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Iraq'>Iraq</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Ireland'>Ireland</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Israel'>Israel</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Italy'>Italy</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Ivory Coast'>Ivory Coast</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Jamaica'>Jamaica</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Japan'>Japan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Jordan'>Jordan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Kazakhstan'>Kazakhstan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Kenya'>Kenya</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Kiribati'>Kiribati</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Korea, North'>Korea, North</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Korea, South'>Korea, South</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Kuwait'>Kuwait</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Kyrgyzstan'>Kyrgyzstan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Laos'>Laos</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Latvia'>Latvia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Lebanon'>Lebanon</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Lesotho'>Lesotho</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Liberia'>Liberia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Libya'>Libya</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Liechtenstein'>Liechtenstein</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Lithuania'>Lithuania</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Luxembourg'>Luxembourg</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Macau'>Macau</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Macedonia'>Macedonia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Madagascar'>Madagascar</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Malawi'>Malawi</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Malaysia'>Malaysia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Maldives'>Maldives</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Mali'>Mali</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Malta'>Malta</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Marshall Islands'>Marshall Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Martinique'>Martinique</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Mauritania'>Mauritania</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Mauritius'>Mauritius</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Mayotte'>Mayotte</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Mexico'>Mexico</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Micronesia, Federated States'>Micronesia, Federated States</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Moldova'>Moldova</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Monaco'>Monaco</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Mongolia'>Mongolia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Montserrat'>Montserrat</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Morocco'>Morocco</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Mozambique'>Mozambique</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Myanmar'>Myanmar</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Namibia'>Namibia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Nauru'>Nauru</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Nepal'>Nepal</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Netherlands'>Netherlands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Netherlands Antilles'>Netherlands Antilles</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='New Caledonia'>New Caledonia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='New Zealand'>New Zealand</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Nicaragua'>Nicaragua</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Niger'>Niger</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Nigeria'>Nigeria</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Niue'>Niue</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Norfolk Island'>Norfolk Island</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Northern Mariana Islands<'>Northern Mariana Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Norway'>Norway</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Oman'>Oman</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Pakistan'>Pakistan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Palau'>Palau</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Panama'>Panama</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Papua New Guinea'>Papua New Guinea</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Paraguay'>Paraguay</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Peru'>Peru</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Philippines'>Philippines</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Pitcairn Island'>Pitcairn Island</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Poland'>Poland</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Portugal'>Portugal</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Puerto Rico'>Puerto Rico</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Qatar'>Qatar</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Reunion'>Reunion</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Romania'>Romania</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Russia'>Russia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Rwanda'>Rwanda</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='S. Georgia and S. Sandwich Isls.'>S. Georgia and S. Sandwich Isls.</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Saint Kitts & Nevis'>Saint Kitts & Nevis</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Saint Lucia'>Saint Lucia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Saint Vincent and The Grenadines'>Saint Vincent and The Grenadines</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Samoa'>Samoa</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='San Marino'>San Marino</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Sao Tome and Principe'>Sao Tome and Principe</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Saudi Arabia'>Saudi Arabia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Senegal'>Senegal</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Seychelles'>Seychelles</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Sierra Leone'>Sierra Leone</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Singapore'>Singapore</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Slovakia'>Slovakia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Slovenia'>Slovenia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Somalia'>Somalia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='South Africa'>South Africa</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Spain'>Spain</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Sri Lanka'>Sri Lanka</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='St. Helena'>St. Helena</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='St. Pierre and Miquelon'>St. Pierre and Miquelon</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Sudan'>Sudan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Suriname'>Suriname</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Svalbard and Jan Mayen Islands'>Svalbard and Jan Mayen Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Swaziland'>Swaziland</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Sweden'>Sweden</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Switzerland'>Switzerland</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Syria'>Syria</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Taiwan'>Taiwan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Tajikistan'>Tajikistan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Tanzania'>Tanzania</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Thailand'>Thailand</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Togo'>Togo</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Tokelau'>Tokelau</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Tonga'>Tonga</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Trinidad and Tobago'>Trinidad and Tobago</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Tunisia'>Tunisia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Turkey'>Turkey</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Turkmenistan'>Turkmenistan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Turks and Caicos Islands'>Turks and Caicos Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Tuvalu'>Tuvalu</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Uganda'>Uganda</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Ukraine'>Ukraine</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='United Arab Emirates'>United Arab Emirates</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='United Kingdom'>United Kingdom</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='United States of America'>United States of America</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Uruguay'>Uruguay</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Uzbekistan'>Uzbekistan</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Vanuatu'>Vanuatu</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Vatican City'>Vatican City</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Venezuela'>Venezuela</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Vietnam'>Vietnam</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Virgin Islands'>Virgin Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Wallis and Futuna Islands'>Wallis and Futuna Islands</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Yemen'>Yemen</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Yugoslavia (Former)'>Yugoslavia (Former)</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Zaire'>Zaire</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Zambia'>Zambia</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='Zimbabwe'>Zimbabwe</option>"+
	                                                                            "<option style='color: rgb(0, 79, 0)' value='DR Congo'>DR Congo</option>"+
																				"</select>"+
																				"<br><lable for='recipient-name' class='col-form-label'>Citizenship</lable><br>"+
														                        "<select name='workCitizenship'class='form-control' id='recipient-name290'>"+
														                        "<option value=''> Select Citizenship </option>"+
																				"<option style='color: rgb(0, 79, 0);' value='India'>India</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='United States of America'>United States of America</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='United Arab Emirates'>United Arab Emirates</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='United Kingdom'>United Kingdom</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Australia'>Australia</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Singapore'>Singapore</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Canada'>Canada</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Qatar'>Qatar</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Kuwait'>Kuwait</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Oman'>Oman</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Bahrain'>Bahrain</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Saudi Arabia'>Saudi Arabia</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Malaysia'>Malaysia</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Germany'>Germany</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='New Zealand'>New Zealand</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='France'>France</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Ireland'>Ireland</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Switzerland'>Switzerland</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='South Africa'>South Africa</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Sri Lanka'>Sri Lanka</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Indonesia'>Indonesia</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Nepal'>Nepal</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Pakistan'>Pakistan</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Bangladesh'>Bangladesh</option>"+
																				"<option style='color: rgb(0, 79, 0);' value='Afghanistan'>Afghanistan</option>"+	
																				"</select>");
				}
				else if (select=="Not working") {
					$("#recipient-name34").html("");
					$("#recipient-name32").html("<lable for='recipient-name' class='col-form-label'>"+
							"Bride's Current Location</lable><br>"+
							"<lable for='recipient-name' class='col-form-label'>Country</lable><br>"+
							"<select name='NotWorkingCountry'class='form-control' id='recipient-name240'>"+
                            "<option value=''> Select Country </option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Afghanistan'>Afghanistan</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Albania'>Albania</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Algeria'>Algeria</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='American Samoa'>American Samoa</option>"+ 
                            "<option style='color: rgb(0, 79, 0);'value='Andorra'>Andorra</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Angola'>Angola</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Anguilla'>Anguilla</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Antarctica'>Antarctica</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Antigua and Barbuda'>Antigua and Barbuda</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Argentina'>Argentina</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Armenia'>Armenia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Aruba'>Aruba</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Australia'>Australia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Austria'>Austria</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Azerbaijan'>Azerbaijan</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bahamas'>Bahamas</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bahrain'>Bahrain</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bangladesh'>Bangladesh</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Barbados'>Barbados</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Belarus'>Belarus</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Belgium'>Belgium</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Belize'>Belize</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Benin'>Benin</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bermuda'>Bermuda</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bhutan'>Bhutan</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bolivia'>Bolivia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Botswana'>Botswana</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bouvet Island'>Bouvet Island</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Brazil'>Brazil</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='British Indian Ocean Territory'>British Indian Ocean Territory</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='British Virgin Islands'>British Virgin Islands</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Brunei'>Brunei</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Bulgaria'>Bulgaria</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Burkina Faso'>Burkina Faso</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Burundi'>Burundi</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cambodia'>Cambodia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cameroon'>Cameroon</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Canada'>Canada</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cape Verde'>Cape Verde</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cayman Islands'>Cayman Islands</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Central African Republic'>Central African Republic</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Chad'>Chad</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Chile'>Chile</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='China'>China</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Christmas Island'>Christmas Island</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cocos Islands'>Cocos Islands</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Colombia'>Colombia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Comoros'>Comoros</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Congo'>Congo</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cook Islands'>Cook Islands</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Costa Rica'>Costa Rica</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Croatia'>Croatia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cuba'>Cuba</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Cyprus'>Cyprus</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Czech Republic'>Czech Republic</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Denmark'>Denmark</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Djibouti'>Djibouti</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Dominica'>Dominica</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Dominican Republic'>Dominican Republic</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='East Timor'>East Timor</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Ecuador'>Ecuador</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Egypt'>Egypt</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='El Salvador'>El Salvador</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Equatorial Guinea'>Equatorial Guinea</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Eritrea'>Eritrea</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Estonia'>Estonia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Ethiopia'>Ethiopia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Falkland Islands'>Falkland Islands</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Faroe Islands'>Faroe Islands</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Fiji'>Fiji</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Finland'>Finland</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='France'>France</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='French Guiana'>French Guiana</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='French Polynesia'>French Polynesia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='French Southern Territories'>French Southern Territories</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Gabon'>Gabon</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Gambia'>Gambia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Georgia'>Georgia</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Germany'>Germany</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Ghana'>Ghana</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Gibraltar'>Gibraltar</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Greece'>Greece</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Greenland'>Greenland</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Grenada'>Grenada</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Guadeloupe'>Guadeloupe</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Guam'>Guam</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Guatemala'>Guatemala</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Guinea'>Guinea</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Guinea-Bissau'>Guinea-Bissau</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Guyana'>Guyana</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Haiti'>Haiti</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Heard and McDonald Islands'>Heard and McDonald Islands</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Honduras'>Honduras</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Hong Kong'>Hong Kong</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Hungary'>Hungary</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Iceland'>Iceland</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='India'>India</option>"+
                            "<option style='color: rgb(0, 79, 0);' value='Indonesia'>Indonesia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Iran'>Iran</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Iraq'>Iraq</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Ireland'>Ireland</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Israel'>Israel</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Italy'>Italy</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Ivory Coast'>Ivory Coast</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Jamaica'>Jamaica</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Japan'>Japan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Jordan'>Jordan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Kazakhstan'>Kazakhstan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Kenya'>Kenya</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Kiribati'>Kiribati</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Korea, North'>Korea, North</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Korea, South'>Korea, South</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Kuwait'>Kuwait</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Kyrgyzstan'>Kyrgyzstan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Laos'>Laos</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Latvia'>Latvia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Lebanon'>Lebanon</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Lesotho'>Lesotho</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Liberia'>Liberia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Libya'>Libya</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Liechtenstein'>Liechtenstein</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Lithuania'>Lithuania</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Luxembourg'>Luxembourg</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Macau'>Macau</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Macedonia'>Macedonia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Madagascar'>Madagascar</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Malawi'>Malawi</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Malaysia'>Malaysia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Maldives'>Maldives</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Mali'>Mali</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Malta'>Malta</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Marshall Islands'>Marshall Islands</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Martinique'>Martinique</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Mauritania'>Mauritania</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Mauritius'>Mauritius</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Mayotte'>Mayotte</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Mexico'>Mexico</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Micronesia, Federated States'>Micronesia, Federated States</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Moldova'>Moldova</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Monaco'>Monaco</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Mongolia'>Mongolia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Montserrat'>Montserrat</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Morocco'>Morocco</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Mozambique'>Mozambique</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Myanmar'>Myanmar</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Namibia'>Namibia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Nauru'>Nauru</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Nepal'>Nepal</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Netherlands'>Netherlands</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Netherlands Antilles'>Netherlands Antilles</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='New Caledonia'>New Caledonia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='New Zealand'>New Zealand</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Nicaragua'>Nicaragua</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Niger'>Niger</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Nigeria'>Nigeria</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Niue'>Niue</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Norfolk Island'>Norfolk Island</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Northern Mariana Islands<'>Northern Mariana Islands</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Norway'>Norway</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Oman'>Oman</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Pakistan'>Pakistan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Palau'>Palau</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Panama'>Panama</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Papua New Guinea'>Papua New Guinea</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Paraguay'>Paraguay</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Peru'>Peru</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Philippines'>Philippines</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Pitcairn Island'>Pitcairn Island</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Poland'>Poland</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Portugal'>Portugal</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Puerto Rico'>Puerto Rico</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Qatar'>Qatar</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Reunion'>Reunion</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Romania'>Romania</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Russia'>Russia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Rwanda'>Rwanda</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='S. Georgia and S. Sandwich Isls.'>S. Georgia and S. Sandwich Isls.</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Saint Kitts & Nevis'>Saint Kitts & Nevis</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Saint Lucia'>Saint Lucia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Saint Vincent and The Grenadines'>Saint Vincent and The Grenadines</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Samoa'>Samoa</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='San Marino'>San Marino</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Sao Tome and Principe'>Sao Tome and Principe</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Saudi Arabia'>Saudi Arabia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Senegal'>Senegal</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Seychelles'>Seychelles</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Sierra Leone'>Sierra Leone</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Singapore'>Singapore</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Slovakia'>Slovakia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Slovenia'>Slovenia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Somalia'>Somalia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='South Africa'>South Africa</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Spain'>Spain</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Sri Lanka'>Sri Lanka</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='St. Helena'>St. Helena</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='St. Pierre and Miquelon'>St. Pierre and Miquelon</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Sudan'>Sudan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Suriname'>Suriname</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Svalbard and Jan Mayen Islands'>Svalbard and Jan Mayen Islands</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Swaziland'>Swaziland</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Sweden'>Sweden</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Switzerland'>Switzerland</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Syria'>Syria</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Taiwan'>Taiwan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Tajikistan'>Tajikistan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Tanzania'>Tanzania</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Thailand'>Thailand</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Togo'>Togo</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Tokelau'>Tokelau</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Tonga'>Tonga</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Trinidad and Tobago'>Trinidad and Tobago</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Tunisia'>Tunisia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Turkey'>Turkey</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Turkmenistan'>Turkmenistan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Turks and Caicos Islands'>Turks and Caicos Islands</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Tuvalu'>Tuvalu</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Uganda'>Uganda</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Ukraine'>Ukraine</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='United Arab Emirates'>United Arab Emirates</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='United Kingdom'>United Kingdom</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='United States of America'>United States of America</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Uruguay'>Uruguay</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Uzbekistan'>Uzbekistan</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Vanuatu'>Vanuatu</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Vatican City'>Vatican City</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Venezuela'>Venezuela</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Vietnam'>Vietnam</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Virgin Islands'>Virgin Islands</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Wallis and Futuna Islands'>Wallis and Futuna Islands</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Yemen'>Yemen</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Yugoslavia (Former)'>Yugoslavia (Former)</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Zaire'>Zaire</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Zambia'>Zambia</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='Zimbabwe'>Zimbabwe</option>"+
                            "<option style='color: rgb(0, 79, 0)' value='DR Congo'>DR Congo</option>"+
                            "</select>"+
                            "<br><lable for='recipient-name' class='col-form-label'>Citizenship</lable><br>"+
                            "<select name='NotWorkingCitizenship'class='form-control' id='recipient-name0'>"+
                            "<option value=''> Select Citizenship </option>"+
							"<option style='color: rgb(0, 79, 0);' value='India'>India</option>"+
							"<option style='color: rgb(0, 79, 0);' value='United States of America'>United States of America</option>"+
							"<option style='color: rgb(0, 79, 0);' value='United Arab Emirates'>United Arab Emirates</option>"+
							"<option style='color: rgb(0, 79, 0);' value='United Kingdom'>United Kingdom</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Australia'>Australia</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Singapore'>Singapore</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Canada'>Canada</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Qatar'>Qatar</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Kuwait'>Kuwait</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Oman'>Oman</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Bahrain'>Bahrain</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Saudi Arabia'>Saudi Arabia</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Malaysia'>Malaysia</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Germany'>Germany</option>"+
							"<option style='color: rgb(0, 79, 0);' value='New Zealand'>New Zealand</option>"+
							"<option style='color: rgb(0, 79, 0);' value='France'>France</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Ireland'>Ireland</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Switzerland'>Switzerland</option>"+
							"<option style='color: rgb(0, 79, 0);' value='South Africa'>South Africa</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Sri Lanka'>Sri Lanka</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Indonesia'>Indonesia</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Nepal'>Nepal</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Pakistan'>Pakistan</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Bangladesh'>Bangladesh</option>"+
							"<option style='color: rgb(0, 79, 0);' value='Afghanistan'>Afghanistan</option>"+
							"</select>");
				}
			});
		});
		
		
</script>

<!--// Meta tag Keywords -->

<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!--web font-->
<link
	href="//fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin-ext,vietnamese"
	rel="stylesheet">
<!--//web font-->
<style type="text/css">
body {
	background-image: url("images/banner.jpg");
}
#register-popup { overflow-y: scroll; }
.valid {
	border: 1px solid green
}

.error {
	color: red
}
</style>
</head>
<?php
		require "mainHeader.php";
		require "mainBody.php";
		require "mainFooter.php";
	?>
	<!-- popup for register -->
	<div id="register-popup" class="popup-effect" style="top: -120px;">
		<div class="popup">
			<h5 class="modal-title text-uppercase">Professional Deyails</h5>
			<div class="lregister-form">
				<form action="database/professionalDetails.php"
					method="post" class="px-3 pt-3 pb-0" id="form">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Highest
							Education </label><br> <select name="HighestEducation"
							class="form-control" id="recipient-name29">
							<option value="">Select Education</option>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Engineering / Computers --'>
								<option value='Aeronautical Engineering'>Aeronautical Engineering</option>
								<option value='B.Arch'>B.Arch</option>
								<option value='BCA'>BCA</option>
								<option value='BE'>BE</option>
								<option value='B.Plan'>B.Plan</option>
								<option value='B.Sc IT/ Computer Science'>B.Sc IT/ Computer Science</option>
								<option value='B.Tech'>B.Tech.</option>
								<option value='Other Bachelor Degree in Engineering/ Computers'>Other Bachelor Degree in Engineering
									/ Computers</option>
								<option value='B.S.(Engineering)'>B.S.(Engineering)</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Engineering / Computers --'>
								<option value='M.Arch'>M.Arch.</option>
								<option value='MCA'>MCA</option>
								<option value='ME'>ME</option>
								<option value='M.Sc. IT / Computer Science'>M.Sc. IT / Computer Science</option>
								<option value='M.S.(Engg.)'>M.S.(Engg.)</option>
								<option value='M.Tech.'>M.Tech.</option>
								<option value='PGDCA'>PGDCA</option>
								<option value='Other Masters Degree in Engineering/ Computers'>Other Masters Degree in Engineering
									/ Computers</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Arts / Science / Commerce --'>
								<option value='Aviation Degree'>Aviation Degree</option>
								<option value='B.A'>B.A.</option>
								<option value='B.Com.'>B.Com.</option>
								<option value='B.Ed.'>B.Ed.</option>
								<option value='BFA'>BFA</option>
								<option value='BFT'>BFT</option>
								<option value='BLIS'>BLIS</option>
								<option value='B.M.M'>B.M.M.</option>
								<option value='B.Sc.'>B.Sc.</option>
								<option value='B.S.W'>B.S.W</option>
								<option value='B.Phil'>B.Phil.</option>
								<option value='Other Bachelor Degree in Arts /Science / Commerce'>Other Bachelor Degree in Arts /
									Science / Commerce</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Arts / Science / Commerce --'>
								<option value='M.A.'>M.A.</option>
								<option value='MCom'>MCom</option>
								<option value='M.Ed.'>M.Ed.</option>
								<option value='MFA'>MFA</option>
								<option value='MLIS'>MLIS</option>
								<option value='M.Sc'>M.Sc.</option>
								<option value='MSW'>MSW</option>
								<option value='M.Phil'>M.Phil.</option>
								<option value='Other Master Degree in Arts /Science / Commerce'>Other Master Degree in Arts /
									Science / Commerce</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Management --'>
								<option value='BBA'>BBA</option>
								<option value='BFM (Financial Management)'>BFM (Financial Management)</option>
								<option value='BHM (Hotel Management)'>BHM (Hotel Management)</option>
								<option value='Other Bachelor Degree in Management'>Other Bachelor Degree in Management</option>
								<option value='BHA / BHM (Hospital Administration)'>BHA / BHM (Hospital Administration)</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Management --'>
								<option value='MBA'>MBA</option>
								<option value='MFM (Financial Management)'>MFM (Financial Management)</option>
								<option value='MHM (Hotel Management)'>MHM (Hotel Management)</option>
								<option value='MHRM (Human Resource Management)'>MHRM (Human Resource Management)</option>
								<option value='PGDM'>PGDM</option>
								<option value='Other Master Degree in Management'>Other Master Degree in Management</option>
								<option value='MHA / MHM (Hospital Administration)'>MHA / MHM (Hospital Administration)</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Medicine in General / Dental / Surgeon --'>
								<option value='B.A.M.S'>B.A.M.S.</option>
								<option value='BDS'>BDS</option>
								<option value='BHMS'>BHMS</option>
								<option value='BSMS'>BSMS</option>
								<option value='BPharm'>BPharm</option>
								<option value='BPT'>BPT</option>
								<option value='BUMS'>BUMS</option>
								<option value='BVSc'>BVSc</option>
								<option value='MBBS'>MBBS</option>
								<option value='B.Sc. Nursing'>B.Sc. Nursing</option>
								<option value='Other Bachelor Degree in Medicine'>Other Bachelor Degree in Medicine</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Medicine - General / Dental / Surgeon --'>
								<option value='MDS'>MDS</option>
								<option value='MD / MS (Medical)'>MD / MS (Medical)</option>
								<option value='M.Pharm'>M.Pharm</option>
								<option value='MPT'>MPT</option>
								<option value='MVSc'>MVSc</option>
								<option value='Other Master Degree in Medicine'>Other Master Degree in Medicine</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Bachelors in Legal --'>
								<option value='BGL'>BGL</option>
								<option value='B.L'>B.L.</option>
								<option value='LL.B'>LL.B.</option>
								<option value='Other Bachelor Degree in Legal'>Other Bachelor Degree in Legal</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Masters in Legal --'>
								<option value='LL.M'>LL.M.</option>
								<option value='M.L'>M.L.</option>
								<option value='Other Master Degree in Legal'>Other Master Degree in Legal</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Financial Qualification - ICWAI / CA / CS/ CFA --'>
								<option value='CA'>CA</option>
								<option value='CFA (Chartered Financial Analyst)'>CFA (Chartered Financial Analyst)</option>
								<option value='CS'>CS</option>
								<option value='ICWA'>ICWA</option>
								<option value='Other Degree in Finance'>Other Degree in Finance</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Service - IAS / IPS / IRS / IES / IFS  --'>
								<option value='IAS'>IAS</option>
								<option value='IES'>IES</option>
								<option value='IFS'>IFS</option>
								<option value='IRS'>IRS</option>
								<option value='IPS'>IPS</option>
								<option value='Other Degree in Service'>Other Degree in Service</option>
							</optgroup>
							<optgroup class='a' label='&nbsp;&nbsp;&nbsp;&nbsp;-- Ph.D. --'>
								<option value='Ph.D'>Ph.D.</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Any Diploma --'>
								<option value='Diploma'>Diploma</option>
								<option value='Polytechnic'>Polytechnic</option>
								<option value='Trade School'>Trade School</option>
								<option value='Others in Diploma'>Others in Diploma</option>
							</optgroup>
							<optgroup class='a'
								label='&nbsp;&nbsp;&nbsp;&nbsp;-- Higher Secondary / Secondary --'>
								<option value='Higher Secondary School / High School'>Higher Secondary School / High
									School</option>
							</optgroup>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Employed
							In</label> <select name="Employed" class="form-control" name="height"
							id="recipient-name30">
							<option value="">-Select-</option>
							<option value="Government">Government</option>
							<option value="Private">Private</option>
							<option value="Business">Business</option>
							<option value="Defence">Defence</option>
							<option value="Self Employed">Self Employed</option>
							<option value="Not working">Not working</option>
						</select>
					</div>
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">Occupation
							Status </label> <input type="text" name="Occupation" class="form-control"
							id="recipient-name31">
					</div>
					<div class="form-group">
						<span id="recipient-name34"></span>
					</div>
					<div class="form-group">
						<span id="recipient-name32"></span>
					</div>
					

					<div class="right-w3l">
						<input type="submit" class="form-control" value="Next" >
					</div>
				</form>
			</div>
			<a class="close" href="#">&times;</a>
		</div>
	</div>
	<!-- popup for register -->
	<script src="jquery/jquery-2.1.3.min.js"></script>
	<script
		src="jquery/jquery.validate.min.js"></script>
	<script
		src="jquery/additional-methods.min.js"></script>
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
					HighestEducation:
					  {
					      required:true,
					  },
					  Employed:
				    		  {
				    		        required:true,
				    		  },
							  Occupation:
				    		  {
				    		        required:true,
							  },
				    		  income:
				    			  {
				    			      required:true,
				    			  },
								  worklocation:
				    			  {
				    			         required:true,
				    			  },
				    			  workCitizenship:
				    				  {
				    				      required:true,
				    				  },
									  NotWorkingCountry:
				    				  {
				    				      required:true,
				    				  },
									  NotWorkingCitizenship:
				    				  {
				    				      required:true,
				    				  },
				  },
		  });
	   });
	</script>

</body>
</html>