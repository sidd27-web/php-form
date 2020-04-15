<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<!-- Latest compiled and minified CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <style type="text/css">
        	.col-md-2{
        		width: 100px;
        		height: 100px;
        		margin-top: 0.8%;
        	}
        	.container-fluid{
        		background-color: grey;
        	}
        	.col-md-10{
        		text-align: center;
        	}
        	#btn{
				color: white; 
				background-color: orange; 
				width: 100%;
				height: 40px;
				background-color: green;
				font-size: 25px;
				font-weight: 30px;
			} 
            .name1{
			  width: 100%;
			  padding: 12px;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  resize: vertical;
			  color: orange; 
			} 
			#name2{
				width: 17%;
				height: 40px;
			} 
			#name3,#country{
				width: 30%;
				height: 40px;
				margin-left: 4.1%;
			}
			table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                background-color: orange;
			}
			th, td {
  				padding: 5px;
  				text-align: left;    
			}
			#name4{
				width:140%;
				height:40px;
			}	  		
        </style>
</head>
<body>   
		<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-2">
				<img src="download.png" >	
				</div>
				<div class="col-md-10">
				<h1 style="color: orange;">ORGANIZATION NAME</h1>
				<h3 style="color: black;">ADDRESS OF ORGANIZATION</h3>
				<p style="color: white;">EMAIL ID OF ORGANIZATION AND WEBSITE OF ORGANIZATION</p>
				</div>
			</div>
		</div>
		</header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h3 style="color: white; background-color: orange; text-align: center;">APPLICATION FORM</h3><br><br>
					 <?php
					 $name = $mname = $lname = $fname = $fname = $fmname = $flname =$moname = $momname = $molname = $mobile = $email = $address1 = $address2 = $address3 = $nationality = $dob = $pincode = $gender = $parentscon = $parentsemail = $fathoccupation = $qualification1 = $qualification2 = $qualification3 = $qualification4 = $qualification5 = $nameschool1 = $nameschool2 = $nameschool3 = $nameschool4 = $nameschool5 = $boarduni1 = $boarduni2 = $boarduni3 = $boarduni4 = $boarduni5 = $year1 = $year2 = $year3 = $year4 = $year5 = $percentage1 = $percentage2  = $percentage3  = $percentage4  = $percentage5  = $religion = $community = "";
					 $nameErr = $mnameErr = $lnameErr = $fnameErr = $fmnameErr = $flnameErr = $monameErr = $momnameErr = $molnameErr = $mobileErr = $emailErr = $address1Err = $address2Err = $address3Err = $dobErr = $pincodeErr = $genderErr = $parentsconErr = $parentsemailErr = $fathoccupationErr = $religionErr = $communityErr = "";

                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
					  if (empty($_POST["name"])) {
					    $nameErr = "Name is required";
					  } else {
					    $name = test_input($_POST["name"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
					      $nameErr = "Only letters and white space allowed";
					    }
					  }



					  $mname = test_input($_POST["mname"]);
					     if (!preg_match("/^[a-zA-Z ]*$/",$mname)) {
					      $mnameErr = "Only letters and white space allowed";
					    }
					    $lname = test_input($_POST["lname"]);
					  if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
					      $lnameErr = "Only letters and white space allowed";
					    }

					    if (empty($_POST["fname"])) {
					    $fnameErr = "Name is required";
					  } else {
					    $fname = test_input($_POST["fname"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
					      $fnameErr = "Only letters and white space allowed";
					    }
					  }
					  $fmname = test_input($_POST["fmname"]);
					  if (!preg_match("/^[a-zA-Z ]*$/",$fmname)) {
					      $fmnameErr = "Only letters and white space allowed";
					    }
					    $flname = test_input($_POST["flname"]);
					  if (!preg_match("/^[a-zA-Z ]*$/",$flname)) {
					      $flnameErr = "Only letters and white space allowed";
					    }
					    if (empty($_POST["moname"])) {
					    $monameErr = "Name is required";
					  } else {
					    $moname = test_input($_POST["moname"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[a-zA-Z ]*$/",$moname)) {
					      $monameErr = "Only letters and white space allowed";
					    }
					  }

					   $momname = test_input($_POST["momname"]);
					  if (!preg_match("/^[a-zA-Z ]*$/",$momname)) {
					      $momnameErr = "Only letters and white space allowed";
					    }
					    $molname = test_input($_POST["molname"]);
					  if (!preg_match("/^[a-zA-Z ]*$/",$molname)) {
					      $molnameErr = "Only letters and white space allowed";
					    }
					    if (empty($_POST["mobile"])) {
					    $mobileErr = "Number is required";
					  } else {
					    $mobile = test_input($_POST["mobile"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[0-9 ]*$/",$mobile)) {
					      $mobileErr = "Only number and white space allowed";
					    }
					  }
                       if (empty($_POST["email"])) {
					    $emailErr = "Email is required";
					  } else {
					    $email = test_input($_POST["email"]);
					    // check if e-mail address is well-formed
					    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					      $emailErr = "Invalid email format";
					    }
					  } 
					  if (empty($_POST["address1"])) {
					    $address1Err = "Number is required";
					  } else {
					    $address1 = test_input($_POST["address1"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[0-9 ]*$/",$address1)) {
					      $address1Err = "Only number and white space allowed";
					    }
					  }
					  if (empty($_POST["address2"])) {
					    $address2Err = "Name is required";
					  } else {
					    $address2 = test_input($_POST["address2"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[a-zA-Z ]*$/",$address2)) {
					      $address2Err = "Only letters and white space allowed";
					    }
					  }
					  if (empty($_POST["address3"])) {
					    $address3Err = "Name is required";
					  } else {
					    $address3 = test_input($_POST["address3"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[a-zA-Z ]*$/",$address3)) {
					      $address3Err = "Only letters and white space allowed";
					    }
					  }

					  if (empty($_POST["pincode"])) {
					    $pincodeErr = "Number is required";
					  } else {
					    $pincode = test_input($_POST["pincode"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[0-9]*$/",$pincode)) {
					      $pincodeErr = "Only number and white space allowed";
					    }
					  }

					   if (empty($_POST["dob"])) {
					    $dobErr = "date of birth is required";
					  } else {
					    $dob = test_input($_POST["dob"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[0-9\/]*$/",$dob)) {
					      $dobErr = "Only number and white space allowed";
					    }
					  }

					  if (empty($_POST["gender"])) {
					    $genderErr = "Gender is required";
					  } else {
					    $gender = test_input($_POST["gender"]);
					  }
					    $nationality = $_POST["nationality"];

					    if (empty($_POST["parentscon"])) {
					    $parentsconErr = "Number is required";
					  } else {
					    $parentscon = test_input($_POST["parentscon"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[0-9 ]*$/",$parentscon)) {
					      $parentsconErr = "Only number and white space allowed";
					    }
					  }
                       if (empty($_POST["parentsemail"])) {
					    $parentsemailErr = "Email is required";
					  } else {
					    $parentsemail = test_input($_POST["parentsemail"]);
					    // check if e-mail address is well-formed
					    if (!filter_var($parentsemail, FILTER_VALIDATE_EMAIL)) {
					      $parentsemailErr = "Invalid email format";
					    }
					  }
					  if (empty($_POST["fathoccupation"])) {
					    $fathoccupationErr = "Name is required";
					  } else {
					    $fathoccupation = test_input($_POST["fathoccupation"]);
					    // check if name only contains letters and whitespace
					    if (!preg_match("/^[a-zA-Z ]*$/",$fathoccupation)) {
					      $fathoccupationErr = "Only letters and white space allowed";
					    }
					  }
						   if (empty($_POST["religion"])) {
						    $religionErr = "RELIGION is required";
						  } else {
						    $religion = test_input($_POST["religion"]);
						  }


						 if (empty($_POST["community"])) {
						    $communityErr = "COMMUNITY is required";
						  } else {
						    $community = test_input($_POST["community"]);
						  }



					      $qualification1 = test_input($_POST["qualification1"]); $qualification2 = test_input($_POST["qualification2"]); $qualification3 = test_input($_POST["qualification3"]); $qualification4 = test_input($_POST["qualification4"]); $qualification5 = test_input($_POST["qualification5"]);
             
			       		  $nameschool1 = test_input($_POST["nameschool1"]);  $nameschool2 = test_input($_POST["nameschool2"]);  $nameschool3 = test_input($_POST["nameschool3"]);  $nameschool4 = test_input($_POST["nameschool4"]);  $nameschool5 = test_input($_POST["nameschool5"]);

					      $year1 = test_input($_POST["year1"]);$year2 = test_input($_POST["year2"]);$year3 = test_input($_POST["year3"]);$year4 = test_input($_POST["year4"]);$year5 = test_input($_POST["year5"]);

					      $boarduni1 = test_input($_POST["boarduni1"]); $boarduni2 = test_input($_POST["boarduni2"]); $boarduni3 = test_input($_POST["boarduni3"]); $boarduni4 = test_input($_POST["boarduni4"]); $boarduni5 = test_input($_POST["boarduni5"]);

					      $percentage1 = test_input($_POST["percentage1"]); $percentage2 = test_input($_POST["percentage2"]); $percentage3 = test_input($_POST["percentage3"]); $percentage4 = test_input($_POST["percentage4"]); $percentage5 = test_input($_POST["percentage5"]); 

                     }
                      

					  function test_input($data) {
						  $data = trim($data);
						  $data = stripslashes($data);
						  $data = htmlspecialchars($data);
						  return $data;
						}
					?>


                     

                    
                     <p><span class="error"></span></p>
                     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                     <div class = "name1">
                     APPLICANT NAME:<label style="margin-left: 4%;background-color: orange; color: white;font-size: 18px;">FIRST NAME</label>
                     <input type="text" id="name2" name="name" value="<?php echo $name;?>"placeholder="FIRST NAME">
                     <span class="error">* <?php echo $nameErr;?></span>
                     <label style="margin-left: 4%;background-color: orange; color: white;font-size: 18px;">MIDDLE NAME</label>
                     <input type="text" id="name2" name="mname" value="<?php echo $mname;?>"placeholder="MIDDLE NAME">
                     <span class="error"><?php echo $mnameErr;?></span>
                     <label style="margin-left: 4%;background-color: orange; color: white;font-size: 18px;">LAST NAME</label>
                     <input type="text" id="name2" name="lname" value="<?php echo $lname;?>"placeholder="LAST NAME">
                     <span class="error"><?php echo $lnameErr;?></span></div>
                     <br>
                     

                     <div class = "name1">
                     FATHER NAME:<label style="margin-left: 5.4%;background-color: orange; color: white;font-size: 18px;">FIRST NAME</label>
                     <input type="text" id="name2" name="fname" value="<?php echo $fname;?>"placeholder="FIRST NAME">
                     <span class="error">*<?php echo $fnameErr;?></span>
                     <label style="margin-left: 4%;background-color: orange; color: white;font-size: 18px;">MIDDLE NAME</label>
                     <input type="text" id="name2" name="fmname" value="<?php echo $fmname;?>"placeholder="MIDDLE NAME">
                     <span class="error"><?php echo $fmnameErr;?></span>
                     <label style="margin-left: 4%;background-color: orange; color: white;font-size: 18px;">LAST NAME</label>
                     <input type="text" id="name2" name="flname" value="<?php echo $flname;?>"placeholder="LAST NAME">
                     <span class="error"><?php echo $flnameErr;?></span></div>
                      <br>


                     <div class = "name1">
                     MOTHER NAME:<label style="margin-left: 5.2%;background-color: orange; color: white;font-size: 18px;">FIRST NAME</label>
                     <input type="text" id="name2" name="moname" value="<?php echo $moname;?>"placeholder="FIRST NAME">
                     <span class="error">*<?php echo $monameErr;?></span>
                     <label style="margin-left: 4%;background-color: orange; color: white;font-size: 18px;">MIDDLE NAME</label>
                     <input type="text" id="name2" name="momname" value="<?php echo $momname;?>"placeholder="MIDDLE NAME">
                     <span class="error"><?php echo $momnameErr;?></span>
                     <label style="margin-left: 4%;background-color: orange; color: white;font-size: 18px;">LAST NAME</label>
                     <input type="text" id="name2" name="molname" value="<?php echo $molname;?>"placeholder="LAST NAME">
                     <span class="error"><?php echo $molnameErr;?></span></div>
				     <br>


  				     <div class = "name1">
                     MOBILE NUMBER:<input style = "margin-right: 8%;"  type="text" id="name3"name="mobile" value="<?php echo $mobile;?>" placeholder="APPLICANT MOBILE NUMBER">
                     <span class="error"><?php echo $mobileErr;?></span>

                        EMAIL ADDRESS:<input type="text" id="name3"name="email" value="<?php echo $email;?>" placeholder="APPLICANT EMAIL ADDRESS">
                     <span class="error"><?php echo $emailErr;?></span>
                     </div>
                     <br>

                      <div class = "name1">
                     ADDRESS:<input type="text" class="name1" name="address1" value="<?php echo $address1;?>" placeholder="FLAT NO/ HOUSE NO"><br>
							<input type="text" class="name1" name="address2" value="<?php echo $address2;?>" placeholder="STREET NO/VILLAGE/TOWN/CITY"><br>
							<input type="text" class="name1" name="address3" value="<?php echo $address3;?>" placeholder="DISTRICT/STATE"></div>
							<br>


						<div class="name1">
                            NATIONALITY:
						    <select style = "margin-right: 12%;"  id="country" name="nationality" <?php echo $nationality ?>>
      						<option value="INDIAN">INDIAN</option>
     					    <option value="NEPAL">NEPAL</option>
      						<option value="BHUTAN">BHUTAN</option>
   						    </select>
   						    PIN CODE:
						    <input type="text" id="name3" name="pincode" value="<?php echo $pincode;?>" placeholder="PIN CODE">
						    <span class="error"><?php echo $pincodeErr;?></span>
   						 </div>
   						 <br>




						    <div class="name1">
                            DATE OF BIRTH:
						    <input style = "margin-right: 11%;"  type="text" id="name3" name="dob" value="<?php echo $dob;?>" placeholder="DD/MM/YYYY">
						    <span class="error"><?php echo $dobErr;?></span>
						     GENDER:  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="FEMALE">FEMALE
							  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="MALE">MALE
							  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="OTHER">OTHER 
							  <span class="error">* <?php echo $genderErr;?></span></div>
							  <br>

                              
                              </br>
                            <div class="name1">
							PARENTS MOBILE NUMBER:<input style = "margin-right: 6%;" type="text"id="name3"name="parentscon" value="<?php echo $parentscon;?>" placeholder="PARENTS MOBILE NUMBER">
						    PARENTS EMAIL-ID:
							<input type="text" id="name3" name="parentsemail" value="<?php echo $parentsemail;?>" placeholder="PARENTS EMAIL-ID">
						    </div>
						    </br>

					        <div class="name1">	
							FATHER OCCUPATION:
							<input type="text" id="name3" name="fathoccupation" value="<?php echo $fathoccupation;?>" placeholder="FATHER OCCUPATION">
						    </div>
					        <br>
          

							<div class="name1">
                            RELIGION:
							  <input type="radio" name="religion" <?php if (isset($religion) && $religion=="hindu") echo "checked";?> value="HINDU">HINDU
							  <input type="radio" name="religion" <?php if (isset($religion) && $religion=="muslim") echo "checked";?> value="MUSLIM">MUSLIM
							  <input type="radio" name="religion" <?php if (isset($religion) && $religion=="christian") echo "checked";?> value="CHRISTIAN">CHRISTIAN 
							  <input type="radio" name="religion" <?php if (isset($religion) && $religion=="buddhissm") echo "checked";?> value="BUDDHISSM">BUDDHISSM
							  <input type="radio" name="religion" <?php if (isset($religion) && $religion=="jainism") echo "checked";?> value="JAINISM">JAINISM
							   <input type="radio" name="religion" <?php if (isset($religion) && $religion=="other") echo "checked";?> value="OTHER">OTHER
							  <span class="error">*<?php echo $religionErr;?></span></div>
							  <br>
                             


							  <div class="name1">
                            COMMUNITY:
							  <input type="radio" name="community" <?php if (isset($community) && $community=="general") echo "checked";?> value="GENERAL">GENERAL
							  <input type="radio" name="community" <?php if (isset($community) && $community=="obc") echo "checked";?> value="OBC">OBC
							  <input type="radio" name="community" <?php if (isset($community) && $community=="sc") echo "checked";?> value="SC">SC 
							  <input type="radio" name="community" <?php if (isset($community) && $community=="st") echo "checked";?> value="ST">ST
							  <input type="radio" name="community" <?php if (isset($community) && $community=="minority") echo "checked";?> value="MINORITY">MINORITY
							   <input type="radio" name="community" <?php if (isset($community) && $community=="other") echo "checked";?> value="OTHER">OTHER
							  <span class="error">*<?php echo $communityErr;?></span></div>
                              <br>
							 <fieldset>
					        <legend>ACADEMIC DETAILS:</legend>
					        <table style="width: 100%;">
                        		<tr>
                        	  		<th>QUALIFICATION</th>
                        	  		<th>NAME OF SCHOOL/COLLEGE</th>
                        	  		<th>YEAR</th>
                        	  		<th>BOARD/UNIVERSITY</th>
                        	  		<th>PERCENTAGE/CGPA/SGP</th>
                        		</tr>
                        		<tr id="name4">
                        	  		<td><input type="text" name="qualification1" value="<?php echo $qualification1; ?>"></td>
                        	  		<td><input type="text" name="nameschool1" value="<?php echo $nameschool1; ?>"></td>
                        	  		<td><input type="text" name="year1" value="<?php echo $year1; ?>"></td>
                        	  		<td><input type="text" name="boarduni1" value="<?php echo $boarduni1; ?>"></td>
                        	  		<td><input type="text" name="percentage1" value="<?php echo $percentage1; ?>"></td>
                        		</tr>
                        		<tr id="name4">
                        	  		<td><input type="text" name="qualification2" value="<?php echo $qualification2; ?>"></td>
                        	  		<td><input type="text" name="nameschool2" value="<?php echo $nameschool2; ?>"></td>
                        	  		<td><input type="text" name="year2" value="<?php echo $year2; ?>"></td>
                        	  		<td><input type="text" name="boarduni2" value="<?php echo $boarduni2; ?>"></td>
                        	  		<td><input type="text" name="percentage2" value="<?php echo $percentage2; ?>"></td>
                        		</tr>
                        		<tr id="name4">
                        	  		<td><input type="text" name="qualification3" value="<?php echo $qualification3; ?>"></td>
                        	  		<td><input type="text" name="nameschool3" value="<?php echo $nameschool3; ?>"></td>
                        	  		<td><input type="text" name="year3" value="<?php echo $year3; ?>"></td>
                        	  		<td><input type="text" name="boarduni3" value="<?php echo $boarduni3; ?>"></td>
                        	  		<td><input type="text" name="percentage3" value="<?php echo $percentage3; ?>"></td>
                        		</tr>
                        		<tr id="name4">
                        	  		<td><input type="text" name="qualification4" value="<?php echo $qualification4; ?>"></td>
                        	  		<td><input type="text" name="nameschool4" value="<?php echo $nameschool4; ?>"></td>
                        	  		<td><input type="text" name="year4" value="<?php echo $year4; ?>"></td>
                        	  		<td><input type="text" name="boarduni4" value="<?php echo $boarduni4; ?>"></td>
                        	  		<td><input type="text" name="percentage4" value="<?php echo $percentage4; ?>"></td>
                        		</tr>
                        		<tr id="name4">
                        	  		<td><input type="text" name="qualification5" value="<?php echo $qualification5; ?>"></td>
                        	  		<td><input type="text" name="nameschool5" value="<?php echo $nameschool5; ?>"></td>
                        	  		<td><input type="text" name="year5" value="<?php echo $year5; ?>"></td>
                        	  		<td><input type="text" name="boarduni5" value="<?php echo $boarduni5; ?>"></td>
                        	  		<td><input type="text" name="percentage5" value="<?php echo $percentage5; ?>"></td>
                        		</tr>
                        	</table></fieldset>
                        <br>

           

						<div class="container-fluid">
							<div class="row">
								<div class="col-md-12"  >
									<h3 style="color: white; background-color: orange; text-align: center;">DECLARATION</h3><br><br>
                                    <div class="row">
                                    	<div class="col-md-12">
                                    	<input type="checkbox" name="declaration" <?php if (isset($declaration) && $declaration=="declaration") echo "checked";?> value="I AGREE "><p style="color: white;">
                                    		 1. I HAVE READ THE NOTICE OF EXAMINATION AND ACCEPT ALL THE TERMS & CONDITIONS MENTIONED THERE IN.
                                             2. I HEREBY DECLARE THAT ALL STATEMENTS MADE IN THIS APPLICATION ARE TRUE, COMPLETE AND CORRECT TO THE BEST OF MY KNOWLEDGE AND BELIEF. I UNDERSTAND THAT IN THE EVENT OF ANY INFORMATION BEING FOUND SUPPRESSED/FALSE OR INCORRECT OR INELIGIBILITY BEING DETECTED BEFORE OR AFTER THE EXAMINATION, MY CANDIDATURE/ APPOINTMENT IS LIABLE TO BE CANCELLED.I AM WILLING TO SERVE ANYWHERE IN INDIA. </p>
                                    	    <span class="error">*<?php echo $communityErr;?></span></div>
                              	
                                    	</div>
                                    </div>
								 </div>
							</div>
						</div>	


                     <input type="submit" id="btn" name="submit" value="Submit">  
                     </form>
                     <h3 style="color: white; background-color: orange; text-align: center; margin-bottom: -2%;">****</h3><br><br>
                 </div>
            </div>
         </div>
          

      

         <h1>APPLICANT INPUT DETAILS</h1>
         <table>
         	<tr>
         		<td><?php echo  $name;?></td>
         		<td><?php echo  $mname;?></td>
         		<td><?php echo  $lname;?></td>
         	</tr>
         	<tr>
         		<td><?php echo  $fname; ?></td>
         		<td><?php echo  $fmname; ?></td>
         		<td><?php echo  $flname;?></td>
         
         	</tr>
         	<tr>
         		<td><?php  echo  $moname; ?></td>
         		<td><?php echo   $momname; ?></td>
         		<td><?php echo   $molname; ?></td>
         	</tr>
         	<tr>
         		<td><?php echo  $mobile; ?></td>
         		<td><?php  echo  $email; ?></td>
         	</tr>
         	<tr>
         		<td><?php echo  $address1; ?></td>
         		<td><?php echo  $address2;?></td>
         		<td><?php echo  $address3;?></td>
         	</tr>
         	<tr>
         		<td><?php echo   $nationality; ?></td>
         		<td><?php  echo   $pincode; ?></td>
         	</tr>
         	<tr>
         		<td><?php   echo  $dob; ?></td>
         		<td><?php   echo $gender; ?></td>
         	</tr>
         	<tr>
         		<td><?php  echo   $parentscon; ?></td>
         		<td><?php echo   $parentsemail;?></td>
         		<td><?php echo   $fathoccupation;?></td>
         	</tr>
         	<tr>
         		<td><?php echo   $religion;?></td>
         		<td><?php echo   $community;?></td>
         	</tr>
         	<tr>
                 <td><?php echo   $qualification1;?></td>
                 <td><?php echo   $nameschool1;?></td>
                 <td><?php echo   $year1; ?></td>
                 <td><?php echo   $boarduni1;?></td>
                 <td><?php echo   $percentage1;?></td>
            </tr>
            <tr>
                 <td><?php echo   $qualification2;?></td>
                 <td><?php echo   $nameschool2;?></td>
                 <td><?php echo   $year2; ?></td>
                 <td><?php echo   $boarduni2;?></td>
                 <td><?php echo   $percentage2;?></td>
            </tr>
            <tr>
                 <td><?php echo   $qualification3;?></td>
                 <td><?php echo   $nameschool3;?></td>
                 <td><?php echo   $year3; ?></td>
                 <td><?php echo   $boarduni3;?></td>
                 <td><?php echo   $percentage3;?></td>
            </tr>
            <tr>
                 <td><?php echo   $qualification4;?></td>
                 <td><?php echo   $nameschool4;?></td>
                 <td><?php echo   $year4; ?></td>
                 <td><?php echo   $boarduni4;?></td>
                 <td><?php echo   $percentage4;?></td>
            </tr>
            <tr>
                 <td><?php echo   $qualification5;?></td>
                 <td><?php echo   $nameschool5;?></td>
                 <td><?php echo   $year5; ?></td>
                 <td><?php echo   $boarduni5;?></td>
                 <td><?php echo   $percentage5;?></td>
            </tr>
         	
         	</table>
         
 <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
          
</body>
</html>