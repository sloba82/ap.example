<?php


class Template
{


public function mailSendToEmpleyee () {

		$mail = '
<!DOCTYPE html>

<head>
</head>
	<body>

    <div style="width: 100%; background-color: #FFFFFF; ">
        <div style="border-left: 5px solid #21618C;  padding: 10px; margin-left: 10%; margin-bottom:10px;">
            <h3 style="color:#21618C;">
           		You applied for job at Abram Expedited Llc <br>	
 				Thank you for application! <br>
                We will contact you soon as possible.
            </h3>
            <p>
             Please contact us if you have any question regarding your job application <br>
	            <a href="https://www.abramexpedited.com/">
	            Click here to visit our home page www.abramexpedited.com
	            </a>
            </p>

            <p>
            <b>Abram Expedited Llc</b> <br>
            5087 Matrin Luther King Jr<br>
            Fort Worth, Tx 76119 <br>
            Telephone: 817-482-6991<br>
            Tel. extension: <br>
            x1 Dispatch <br>
			x2 Safety <br>
			x3 Accounting

            </p>
         
        </div>
    </div>

	</body>
</html>
		';

		return $mail;
	}



    public function futureEmployeeBildTemplate(
        $previous,
        $accident,
        $convicti,
        $employerData,
        $post
    )
    {

        $html = '

<!DOCTYPE html>
<head>
	<style type="text/css">
		table {
		    border-collapse: collapse;
		}

		table, th, td {
		    border: 1px solid black;
		}
		.tableFont table, th, td {
			font-size: 10px;
		}
		body {
			font-size: 10px;
		}
		p {
			padding: 0px;
			margin-bottom: 5px;
			margin-top: 5px;
			margin-right: 0px;
			margin-left: 0px;
		}
		h3 {
			font-size: 12px;
			padding: 3px;
			margin: 0px;
		}
		h2 {
			font-size: 14px;
			padding: 3px;
			margin: 0px;
		}
		h1 {
			font-size: 16px;
			text-align: center;
			padding: 3px;
			margin: 0px;
		}


		@media print  
		{
		    div{
		        page-break-inside: avoid;
		    }
		}

	</style>
</head>
<body>';

        $html .= '

<div style="border-bottom: 1px solid black;">
	<h1>APPLICATION FOR EMPLOYMENT</h1>	
</div>

<div style="border: 1px solid black; padding: 5px; font-size:12px;">
	<p> 
	COMPANY: <u><b>Abram Expedited LLC</b></u>
	STREET ADDRESS:	<u><b>5087 MARTIN LUTHER KING JR</b></u> 
	</p>

	<p>
	CITY, STATE AND ZIP CODE: <u><b>FORT WORTH, TX	76119</b></u>
	</p>
</div>

<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">

	<div style="background-color:#d3d3d3;">
		<h3>PROSPECTIVE EMPLOYEE DATA:</h3>
	</div>

	<p style="border-bottom: 1px dotted #808080;" >
	Name: <u><b>' . $post['first_name'] . '</b></u> 
	</p>
	<p style="border-bottom: 1px dotted #808080;" >
	Middle: <u><b>' . $post['middle_name'] . '</b></u> 
	</p>
	<p style="border-bottom: 1px dotted #808080;" >
	Maiden name, if any: <u><b>' . $post['maiden_name'] . '</b></u> 
	</p>
	<p style="border-bottom: 1px dotted #808080;" >
	Last name: <u><b>' . $post['last_name'] . '</b></u> 
	</p>
	
	<p style="border-bottom: 1px dotted #808080;" >
	Address street: <u><b>' . $post['address_street'] . '</b></u> 
	City: <u><b>' . $post['city'] . '</b></u> 
	State: <u><b>' . $post['state'] . '</b></u> 
	Zip code: <u><b>' . $post['stateZip'] . '</b></u> 
	How Long?: <u><b>' . $post['how_long'] . '</b></u> 
	</p>

	<p style="border-bottom: 1px dotted #808080;" >
	Date of Birth: <u><b>' . $post['date_birth'] . '</b></u>
	</p>

	<p style="border-bottom: 1px dotted #808080;" >
	Social Security No.: <u><b>' . $post['social_securyty'] . '</b></u>
	</p>

	<p style="border-bottom: 1px dotted #808080;" >
	Hire Date: <u><b>' . $post['hire_date'] . '</b></u>
	</p>

	<p style="border-bottom: 1px dotted #808080;" >
	Telephone Number: <u><b>' . $post['tel_number'] . '</b></u>
	</p>

	<p style="border-bottom: 1px dotted #808080;" >
	E-mail Address: <u><b>' . $post['mail'] . '</b></u>
	</p>

	<div style="background-color:#d3d3d3;">
		<h3>PREVIOUS THREE YEARS RESIDENCY:</h3>
	</div>
<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">

';

        $max = sizeof($previous);
        for ($i = 0; $i < $max; $i++) {
            $html .= '
				<p style="border-bottom: 1px dotted #808080;" >
					Address Street: <u><b>' . $previous[$i][0] . '</b></u>
					City: <u><b>' . $previous[$i][1] . '</b></u>
					State: <u><b>' . $previous[$i][2] . '</b></u>
					Zip code: <u><b>' . $previous[$i][3] . '</b></u>
					# Years: <u><b>' . $previous[$i][4] . '</b></u>
				</p>';
        }

        $html .= '
    	</div>
    </div>

		<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">
		<div style="background-color:#d3d3d3;">
			<h3>LICENSE INFORMATION</h3>
		</div>	
			<p>
			Section 383.21 FMCSR states "No person who operates a commercial motor vehicle shall at any time have more than one driver&#39;s license". I certify that I do not have more than one motor vehicle license , the information for which is listed below.
			</p>
			<table style="width:100%;">
			  <tr>
			    <td>State: <div><b>' . $post['license_state'] . '</b></div></td>
			    <td>License Number: <div><b>' . $post['license_number'] . '</b></div></td>
			    <td>Type: <div><b>' . $post['license_type'] . '</b></div></td>
			    <td>Expiration Date: <div><b>' . $post['license_expiration'] . '</b></div></td>
			  </tr>
			</table>
		</div>

		<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">
			<div style="background-color:#d3d3d3;">
				<h3>DRIVING EXPERIENCE</h3>
			</div>
			<table style="width:100%;" cellpadding="3">
			  <tr>
			    <th>Class Of Equipment</th>
			    <th>Type Of Equipment <br> (Van, Tank , Flat, Etc.)</th>
			    <th>Dates: From-To </th>
			    <th>Approx.No.Of Miles (Total)</th>
			  </tr>
			  <tr>
			    <td>Straight Truck: </td>
			    <td><b>' . $post['driving_straight_type'] . '</b></td>
			    <td><b>' . $post['driving_straight_from'] . "-" . $post['driving_straight_to'] . '</b></td>
			    <td><b>' . $post['driving_straight_miles'] . '</b></td>
			  </tr>
			   <tr>
			    <td>Tractor And Semi-Trailer</td>
			    <td><b>' . $post['driving_tractor_type'] . '</b></td>
			    <td><b>' . $post['driving_tractor_two_from'] . "-" . $post['driving_tractor_twot_to'] . '</b></td>
			    <td><b>' . $post['driving_tractor_miles'] . '</b></td>
			  </tr>
			   <tr>
			    <td>Tractor- Two Trailers</td>
			    <td><b>' . $post['driving_tractor_two_type'] . '</b></td>
			    <td><b>' . $post['driving_tractor_from'] . "-" . $post['driving_tractort_to'] . '</b></td>
			    <td><b>' . $post['driving_tractor_two_miles'] . '</b></td>
			  </tr>
			  <tr>
			    <td>Other</td>
			    <td><b>' . $post['driving_other_type'] . '</b></td>
			    <td><b>' . $post['driving_other_from'] . "-" . $post['driving_other_to'] . '</b></td>
			    <td><b>' . $post['driving_other_miles'] . '</b></td>
			  </tr>
			</table>
		</div>

        ';

        $html .= '
	<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">
		<div style="background-color:#d3d3d3;">
			<h3>ACCIDENT RECORD FOR PAST 3 YEARS OR MORE:</h3>
		</div>		

		<table style="width:100%;" cellpadding="3">
			  <tr>
			    <th>Dates:</th>
			    <th>Nature Of Accident <br> (Head-On , Rear-End , Upset, Etc.)</th>
			    <th>Number Fatalities</th>
			    <th>Number Injuries</th>
			    <th>Chemical Spills</th>
			  </tr>
			  
		';

        $max = sizeof($accident);
        for ($i = 0; $i < $max; $i++) {
            $html .= '<tr>
						<td><b>' . $accident[$i][0] . '</b></td>
						<td><b>' . $accident[$i][1] . '</b></td>
						<td><b>' . $accident[$i][2] . '</b></td>
						<td><b>' . $accident[$i][3] . '</b></td>
						<td><b>' . $accident[$i][4] . '</b></td>
					</tr>';
        }

        $html .= '
		 	
		</table>
	</div>


	<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">
		<div style="background-color:#d3d3d3;">
			<h3>TRAFFIC CONVICTIONS AND FORFEITURES FOR THE PAST 3 YEARS (OTHER THAN PARKING VIOLATIONS)</h3>
		</div>		

		<table style="width:100%;" cellpadding="3">
			  <tr>
			    <th>Date Convicted (Month/Year)</th>
			    <th>Violation</th>
			    <th>State Of Violation Location</th>
			    <th>Penalty (Forfeited Bond, <br> Collateral And/Or Points) </th>
			  </tr>	

		';

        $max = sizeof($convicti);
        for ($i = 0; $i < $max; $i++) {
            $html .= '
	        	<tr>
					<td><b>' . $convicti[$i][0] . '</b></td>
					<td><b>' . $convicti[$i][1] . '</b></td>
					<td><b>' . $convicti[$i][2] . '</b></td>
					<td><b>' . $convicti[$i][3] . '</b></td>
				</tr>';

        }

        $html .= '
		</table>

		<p style="border-bottom: 1px dotted #808080;" >
		A. Have you ever been denied a license, permit or privilege to operate a motor vehicle?: <u><b>' . $post['denied_license'] . '</b></u>
		If Yes, Explain: <u><b>' . $post['denied_license_explain'] . '</b></u>   
		</p>	

		<p style="border-bottom: 1px dotted #808080;" >
		B. Has any license , permit or privilege ever been suspended or revoked?: <u><b>' . $post['suspended_license'] . '</b></u>
		If Yes, Explain: <u><b>' . $post['suspended_license_explain'] . '</b></u>   
		</p>	


	</div>

	<div>
		<div style="background-color:#d3d3d3;">
			<h3>PREVIOUS EMPLOYMENT HISTORY</h3>
		</div>


	';

        $max = sizeof($employerData);
        for ($i = 0; $i < $max; $i++) {

        			$num = $i + 1;

            $html .= '


      			<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">	

      				<p style="background-color:#d3d3d3;"> '. $num .' PREVIUS EMPLOYER</p>	

            		<p style="border-bottom: 1px dotted #808080;" >
						Last employer name: <u><b>' . $employerData[$i][0] . '</b></u>
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						Last employer address: <u><b>' . $employerData[$i][1] . '</b></u>
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						City: <u><b>' . $employerData[$i][2] . '</b></u> 
						State: <u><b>' . $employerData[$i][3] . '</b></u> 
						Zip: <u><b>' . $employerData[$i][4] . '</b></u> 

					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						Last employer e-mail: <u><b>' . $employerData[$i][5] . '</b></u>
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						Employer phone: <u><b>' . $employerData[$i][6] . '</b></u>
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						Position held: <u><b>' . $employerData[$i][7] . '</b></u>
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						
						
						Position held from: <u><b>' . $employerData[$i][8] . '</b></u> 
						Position held to: <u><b>' . $employerData[$i][9] . '</b></u>	
						
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						Salary: <u><b>' . $employerData[$i][10] . '</b></u>
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						Reasons for leaving: <u><b>' . $employerData[$i][11] . '</b></u>
					</p>	

					<p style="border-bottom: 1px dotted #808080;" >
						Any gaps in employment and/or unemployment must be explained. Include dates (month/year) and reason: <br>
						 <u><b>' . $employerData[$i][12] . '</b></u>
					</p>	


					<p style="border-bottom: 1px dotted #808080;" >
						Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer?
						 <u><b>' . $employerData[$i][13] . '</b></u>
					</p>

					<p style="border-bottom: 1px dotted #808080;" >
						Was the previous job position designated as a safety sensitive function in any DOT regulated mode,<br>
						subject to alcohol and controlled substances testing requirements as required by 49 CFR Part 40?
						 <u><b>' . $employerData[$i][14] . '</b></u>
					</p>

				</div>

				';

        }


        $html .= '</div>';


        return $html;
    }


    public function templateBildEmployer(
        $name,
        $address,
        $city,
        $State,
        $Zip,
        $email,
        $phone,
        $positionHeld,
        $positionHeldFrom,
        $positionHeldTo,
        $salary,
        $post
    )
    {

        $html = '

	
	

		<!DOCTYPE html>
<head>
	<style type="text/css">
		table {
		    border-collapse: collapse;
		}

		table, th, td {
		    border: 1px solid black;
		}
		.tableFont table, th, td {
			font-size: 10px;
		}
		body {
			font-size: 10px;
		}
		p {
			padding: 0px;
			margin-bottom: 5px;
			margin-top: 5px;
			margin-right: 0px;
			margin-left: 0px;
		}
		h3 {
			font-size: 12px;
			padding: 3px;
			margin: 0px;
		}
		h2 {
			font-size: 14px;
			padding: 3px;
			margin: 0px;
		}
		h1 {
			font-size: 16px;
			text-align: center;
			padding: 3px;
			margin: 0px;
		}
		@media print  
		{
	    div{
	        page-break-inside: avoid;
	    }
		}

	</style>
</head>
<body>

<div style="border-bottom: 1px solid black;">
	<h1>SAFETY  PERFORMANCE  HISTORY  RECORDS REQUEST</h1>	
</div>
<div style="border: 1px solid black; padding: 5px;">
	<div style="background-color:#d3d3d3;">
		<h2>PART 1 | TO BE COMPLETED BY PROSPECTIVE EMPLOYEE</h2>
	</div>
		<div style="background-color: #f4f6f9; margin-bottom: 5px; margin-top: 5px;">
		<h3>Prospective Employee data:</h3>
			<table class="tableFont" style="width:100%;">
			  <tr>
			    <td>First Name:  <div><b>' . $post['first_name'] . ' </b></div></td>
			    <td>Middle Name: <div><b>' . $post['middle_name'] . ' </b></div></td>
			    <td>Maiden Name: <div><b>' . $post['maiden_name'] . '</b></div></td>
			    <td>Last Name: <div><b>' . $post['last_name'] . '</b></div></td>
			  </tr>
			  <tr>
				<td>Social Securyty No: <div><b>' . $post['social_securyty'] . ' </b></div></td>
				<td>Date of Birth:: <div><b>' . $post['date_birth'] . '</b></div></td>
				<td></td>
				<td></td>
			  </tr>
			</table>
		</div>
	<div>
		<h3>Hereby authorize:</h3>
		<div style="border: 1px solid black; padding: 10px; font-size:12px; margin-top: 5px;">	

			<p style="border-bottom: 1px dotted #808080;" >
				Previous Employer: <u><b>' . $name . '</b></u>
			</p>

			<p style="border-bottom: 1px dotted #808080;" >
				Street: <u><b>' . $address . '</b></u>
			</p>

			<p style="border-bottom: 1px dotted #808080;" >
				City: <u><b>' . $city . '</b></u> 
				State: <u><b>' . $State . '</b></u> 
				Zip: <u><b>' . $Zip . '</b></u> 
			</p>

			<p style="border-bottom: 1px dotted #808080;" >
				Email: <u><b>' . $email . '</b></u>
			</p>

			<p style="border-bottom: 1px dotted #808080;" >
				Email: <u><b>' . $phone. '</b></u>
			</p>

		</div>
	</div>
	<div>
		<p>
		To release and forward the information requested by section 3 of this document concerning my Alcohol and Controlled
		Substances Testing records within the previous 3 years from ' . $post['user_time'] . '.
		</p>
	</div>
	<ul> 
	<li>To:
	    <ul>
		    <li>Prospective Employer: <b>ABRAM EXPEDITED LLC</b></li>
		    <li>Attention:            <b>DARKO  ABRAMOVIC</b></li>
		    <li>Street:               <b>5087 MATRIN LUTHER KING JR </b></li>
		    <li>City, State, Zip:     <b>FORT WORTH,  TX 76119</b></li>
		    <li>Telephone:            <b>817-482-6991</b></li>
	    </ul>
	  </li>
	</ul>
	<div>
	 	<p>In compliance with §40.25(g) and 391.23(h), release of this information must be made in a written form that ensures confidentiality, such as fax, email, or letter.
	 	</p>
	</div>
 	<ul>
	 	<li>Prospective employer&#39;s fax number:    <b>214-988-1663</b></li>
	 	<li>Prospective employer&#39;s email address: <b>office@abramexpedited.com</b></li>
 	</ul>


    <div style="border: 1px solid black; margin: 5px; padding:10px;">
	    <div style="background-color:#d3d3d3;">
	        <h2>
				TO BE READ AND SIGNED BY APPLICANT
	        </h2>
	    </div>

			<p>
				I authorize You To Make Sure Investigations And Inquiries To My Personal, Employment, Financial Or Medical History And Other Related Matters As May Be Necessary In Arriving At An Employment Decision.  (Generally, Inquiries Regarding Medical History Will Be Made Only If And After A Conditional Offer Of Employment Has Been Extended.)  I Hereby Release Employers, Schools, Health Care Providers And Other Persons From All Liability In Responding To Inquiries And Releasing Information In Connection With My Application.
			<p>
				In The Event Of Employment. I Understand That False Or Misleading Information Given In My Application Or Interview(S) May Result In Discharge.  I Understand, Also, That I Am Required To Abide By All Rules And Regulations Of The Company.
			</p>
			<p>
				* I Understand That Information I Provide Regarding Current And/Or Previous Employers May Be Used, And Those Employer(S) Will Be Contacted, For The Purpose Of Investigating My Safety Performance History As Required By 49 Cfr 391.23(D) And (E).  I Understand That I Have The Right To:
			</p>
			<p>
				* Review Information Provided By Current/Previous Employers;
			</p>
			<p>
				* Have Errors In The Information Corrected By Previous Employers And For Those Previous Employers To Re-Send The Corrected Information To The Prospective Employer; And
			</p>
			<p>
				* Have A Rebuttal Statement Attached To The Alleged Erroneous Information, If The Previous Employer(S) And I Cannot Agree On The
			Accuracy Of The Information."
			</p>

	 	<div style="margin-left: 280px;">
	 		<div style="font-family:signiture; font-size:20px;">
	 			' . $post['first_name'] . ' ' . $post['last_name'] . '
	 		</div>
	 		<div style="border-top:1px solid black; padding-top:2px; width: 100px; text-align: center;">
	 			Applicant&#39;s Signature 
	 		</div>
	 		<div style="margin-top: 3px;">
	 			Date: ' . $post['user_time'] . '.
	 		</div>
	 	</div>

	 	<div style="margin-top: 15px;">
	 		<p>
	 		This information is being requested in compliance with §40.25(g) and 391.23	
	 		</p>
	 	</div>

 	</div>

</div>

<div style="border: 1px solid black; padding: 5px; margin-top: 5px;">
	<div style="background-color:#d3d3d3;">
		<h2>PART 2 | TO BE COMPLETED  BY PREVIOUS EMPLOYER</h2>
	</div>

	<form action="#" method="post">
		<h3>ACCIDENT HISTORY</h3>
		<div style="margin-top: 10px;">
			The applicant named above was employed by us.  Yes <input type="checkbox" name="aplicant" value="yes" /> No <input type="checkbox" name="aplicantno" value="no"/>
		</div>

		<div style="margin-top: 5px;">
			Employed as  <input type="text" name="employed_as" size="40"/> from (m/y) <input type="text" name="employed_from" size="20"/> to (m/y) <input type="text" name="employed_to" size="20"/>
		</div>
		<div  style="margin-top: 3px;">
		1.	Did he/she drive motor vehicle for you? Yes <input type="checkbox" name="drive_yes" value="yes" /> No <input type="checkbox" name="drive_no" value="no"/>  If yes, what type?  Straight Truck <input type="checkbox" name="straight" value="yes" />   Tractor-Semitrailer <input type="checkbox" name="semitrailer" value="yes" />  Bus <input type="checkbox" name="bus" value="yes" />  Cargo Tank <input type="checkbox" name="cargoTank" value="yes" />  Doubles/Triples <input type="checkbox" name="duble" value="yes" />   Other <input type="text" name="other" size="40" />
		</div>
		<div  style="margin-top: 3px;">
		2.	Reason for leaving your employ: Discharged <input type="checkbox" name="discharged" value="yes" />	Resignation <input type="checkbox" name="resigned" value="yes" />  Lay Off <input type="checkbox" name="layoff" value="yes" />  Military Duty <input type="checkbox" name="militaryduty" value="yes" /> If there is no safety performance history to report, check here <input type="checkbox" name="drive_yes" value="yes" />, sign below and return.
		</div>
		
		<div  style="margin-top: 8px;">
		<b>ACCIDENTS:</b> Complete the following for any accidents included on your accident register (§390.15(b)) that involved the applicant in the 3 years prior to the application date shown above, or check D here if there is no accident register data for this driver.
		</div>
		<div style="margin-top: 3px;">
			<table class="tableFont" style="width:100%;">
			  <tr>
			  	<th>No.</th>
				<th>Date</th>
				<th>Location</th>
				<th># Injuries</th>
				<th># Fatalities</th>
				<th>Hazmat Spill</th>
			  </tr>
			  <tr>
			  	<th>1</th>
			  	<th><input type="text" name="date" size="40"/></th>
			  	<th><input type="text" name="location" size="40"/></th>
			  	<th><input type="text" name="injuries" size="40"/></th>
			  	<th><input type="text" name="fatalaties" size="40"/></th>
			  	<th><input type="text" name="hazmatspill" size="40"/></th>
			  </tr>
			  <tr>
			  	<th>2</th>
			  	<th><input type="text" name="date2" size="40"/></th>
			  	<th><input type="text" name="location2" size="40"/></th>
			  	<th><input type="text" name="injuries2" size="40"/></th>
			  	<th><input type="text" name="fatalaties2" size="40"/></th>
			  	<th><input type="text" name="hazmatspill2" size="40"/></th>
			  </tr>
			  <tr>
			  	<th>3</th>
			  	<th><input type="text" name="date3" size="40"/></th>
			  	<th><input type="text" name="location3" size="40"/></th>
			  	<th><input type="text" name="injuries3" size="40"/></th>
			  	<th><input type="text" name="fatalaties3" size="40"/></th>
			  	<th><input type="text" name="hazmatspill3" size="40"/></th>
			  </tr>
			</table>
		</div>

		<div style="margin-top: 10px;">
		Please provide information concerning any other accidents involving the applicant that were reported to government agencies or insurers or retained under internal company policies: 
		<div>
			<input type="text" name="informatioaccidents" size="300"/>
		</div>
		</div>

		<div style="margin-top: 5px;">
		Any other remarks: 
		<div>
			<input type="text" name="otherremarks" size="300"/>
		</div>
		</div>

		<div style="margin-top: 10px; margin-left: 450px;">
			<div>
				Signature: <input type="text" name="signiture" size="45"/>
			</div>
			<div style="margin-top: 5px;">
				Title: <input type="text" name="Title" size="20"/> Date <input type="text" name="signituretitle" size="20"/> 

			</div>
		</div>


	</form>


</div>

<div style="border: 1px solid black; padding: 5px; margin-top: 5px;">
	<div style="background-color:#d3d3d3;">
		<h2>PART 3 | TO BE COMPLETED BY PREVIOUS EMPLOYER</h2>
	</div>
	<form action="#" method="post">
	<h3>DRUG AND ALCOHOL HISTORY</h3>
		<div style="margin-top: 5px;">
			If driver was not subject to Department of Transportation testing requirements while employed by this employer, please check here <input type="checkbox" name="subjecto" value="yes" />, fill in the dates of employment from <input type="text" name="dateform" size="20"/> to <input type="text" name="dateto" size="20"/>, complete bottom of Part 3, sign, and return.
		</div>

		<div style="margin-top: 10px;">
			Driver was subject to Department of Transportation testing requirements from <input type="text" name="subjectdateform" size="20"/> to <input type="text" name="subjectdateto" size="20"/>
		</div>

		<div style="margin-top: 10px;">
			1.	Has this person had an alcohol test with the result of 0.04 or higher alcohol concentration? Yes <input type="checkbox" name="alcoholdrive_yes" value="yes" /> No <input type="checkbox" name="alcoholdrive_no" value="no"/> 
		</div>

		<div style="margin-top: 5px;">
			2.  Has this person tested positive or adulterated or substituted a test specimen for controlled substances? Yes <input type="checkbox" name="positivesubdrive_yes" value="yes" /> No <input type="checkbox" name="positivesubdrive_no" value="no"/> 
		</div>

		<div style="margin-top: 5px;">
			3.	Has this person refused to submit to a post-accident, random, reasonable suspicion,
			or follow-up alcohol or substance test? Yes <input type="checkbox" name="refusedtest_yes" value="yes" /> No <input type="checkbox" name="refusedtest_no" value="no"/>
		</div>

		<div style="margin-top: 5px;">
			4.	Has this person committed other violations of Subpart B of Part 382, or Part 40? Yes <input type="checkbox" name="1violations_yes" value="yes" /> No <input type="checkbox" name="3violations_no" value="no"/>
		</div>

		<div style="margin-top: 5px;">
			5.	If this person has violated a DOT drug and alcohol regulation, did this person complete a SAP-prescribed n program in your employ, including return-to-duty and follow-up tests?
			If yes, please send documentation back with this form. Yes <input type="checkbox" name="2violations_yes" value="yes" /> No <input type="checkbox" name="1violations_no" value="no"/>
		</div>
		<div style="margin-top: 5px;">
			6.  For a driver who successfully completed a SAP&#39;s rehabilitation referral and remained in your employ, did this driver subsequently have an alcohol test result of 0.04 or greater,
			 a verified positive drug test, or refuse to be tested? Yes <input type="checkbox" name="3violations_yes" value="yes" /> No <input type="checkbox" name="2violations_no" value="no"/>
		</div>

		<div style="margin-top: 10px;">
			In answering these questions, include any required DOT drug or alcohol testing information obtained from prior previous previous 3 years prior to the application date shown on page 1
		</div>

		<div style="margin-top: 10px;">
			
			<div style="margin-top: 5px;">
				Name: <input type="text" name="namecompany" size="106"/>
			</div>
			<div style="margin-top: 5px;">
				Company: <input type="text" name="companycompany" size="100"/>
			</div>
			<div style="margin-top: 5px;">
				Street: <input type="text" name="streetcompany" size="106"/>
			</div>
			<div style="margin-top: 5px;">
				City, State, Zip: <input type="text" name="cityzipcompany" size="70"/> Telephone: <input type="text" name="telephonecompany" size="50"/>
			</div>
			<div style="margin-top: 5px;">
				Part 3 Completed by (Signiture): <input type="text" name="signiturecompany" size="70"/> Date: <input type="text" name="signiturecompany2" size="30"/>
			</div>

		</div>


	</form>


</div>

<div style="border: 1px solid black; padding: 5px; margin-top: 5px;">
	<form action="#" method="post">
	<div style="background-color:#d3d3d3;">
		<h2>PART 4a | TO BE COMPLETED BY PROSPECTIVE EMPLOYER</h2>
	</div>
	<div style="margin-top: 5px;">
		This form was (check one) <input type="checkbox" name="faxe" value="yes" />  Faxed to previous employer	 <input type="checkbox" name="mailed" value="yes" /> Mailed <input type="checkbox" name="emailer" value="yes" />  Emailed <input type="checkbox" name="other4b" value="yes" /> Other <input type="text" name="chackother" size="20"/> 
	</div>
	<div style="margin-top: 5px;">
		By: <input type="text" name="by" size="70"/> Date: <input type="text" name="dateby" size="20"/>
	</div>

	</form>
</div>

<div style="border: 1px solid black; padding: 5px; margin-top: 5px;">
	<form action="#" method="post">
	<div style="background-color:#d3d3d3;">
		<h2>PART 4b | TO BE COMPLETED BY PROSPECTIVE EMPLOYER</h2>
	</div>
	<div style="margin-top: 5px;">
		Information received from: <input type="text" name="information" size="140"/> 
	</div>
	<div style="margin-top: 5px;">
		Recorded by: <input type="text" name="recorded" size="100"/> Method:  <input type="checkbox" name="recfaxe" value="yes" /> Fax   <input type="checkbox" name="recfmail" value="yes" /> Mail   <input type="checkbox" name="recemail" value="yes" />  Email   <input type="checkbox" name="rectehele" value="yes" /> Telephone <input type="text" name="rectelnumbrer" size="20"/> 
	</div>
	<div style="margin-top: 5px;">
		Date <input type="text" name="4bdate" size="50"/>  <input type="checkbox" name="4bother" value="yes" /> Other <input type="text" name="4bother2" size="50"/>
	</div>

	</form>
</div>
';

        return $html;
    }


}