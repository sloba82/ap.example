$(function () {

    $('#clickon').on('click', function () {
        var listnumber = $("#employerlist li").length;
        var employernumbering = ['First', 'Second', 'Third', 'Fourth', 'Fifth', 'Sixth', 'Seventh', 'Eighth', 'Ninth', 'Tenth'];
        if (listnumber < 10) {
            $("#employerlist").append(
                '<li id="emploerLIlist' + listnumber + '">' +
                    /*	'<div onclick="remove(emploerLIlist'+listnumber+')"> REMOVE EMPOLOYER </div>'+		*/
                '<div class="form-row">' +
                '<div class="col-md-6 mb-2">' +
                '<label for="employer_name">' + employernumbering[listnumber] + ' last employer name</label>' +
                '<input name="employer_name_' + listnumber + '" type="text" class="form-control" id="employer_name' + listnumber + '" placeholder="Last employer name" >' +
                '</div>' +
                '<div class="col-md-6 mb-2">' +
                '<label for="employer_address">' + employernumbering[listnumber] + ' last employer address</label>' +
                '<input name="employer_address_' + listnumber + '" type="text" class="form-control" id="employer_address' + listnumber + '" placeholder="Last employer address"  >' +
                '</div> ' +
                '</div>'+

                '<div class="form-row">' +   
                '<div class="col-md-4 mb-2">' +
                '<label for="employer_city_' + listnumber + '">City:</label>' +
                '<input name="employer_city_' + listnumber + '" type="text" class="form-control" id="employer_city_' + listnumber + '" placeholder="City, State, Zip"  >' +
                '</div>' +


                '<div class="col-md-4 mb-2">' +
                '<label for="employer_city_state_zip_' + listnumber + '">State:</label>' +
                '<input name="employer_state_' + listnumber + '" type="text" class="form-control" id="employer_city_state_zip_' + listnumber + '" placeholder="City, State, Zip"  >' +
                '</div>' +


                '<div class="col-md-4 mb-2">' +
                '<label for="city_state_zip">Zip:</label>' +
                '<input name="employer_zip_' + listnumber + '" type="text" class="form-control" id="employer_city_state_zip_' + listnumber + '" placeholder="City, State, Zip"  >' +
                '</div>' +


                '</div>' +  

                '</div> ' +
                '<div class="form-row">' +
                '<div class="col-md-6 mb-2">' +
                '<label for="employer_address_email">' + employernumbering[listnumber] + ' last employer e-mail</label>' +
                '<input name="employer_address_email_' + listnumber + '" type="email" class="form-control" id="employer_address_email' + listnumber + '" placeholder="Last employer e-mail">' +
                '</div>' +
                '<div class="col-md-6 mb-2">' +
                '<label for="employer_phone">Employer phone</label>' +
                '<input name="employer_phone_' + listnumber + '" type="text" class="form-control" id="employer_phone' + listnumber + '" placeholder="Employer phone"  >' +
                '</div>' +
                '</div>' +
                '<div class="form-row">' +
                '<div class="col-md-3 mb-2">' +
                '<label for="position_held">Position held</label>' +
                '<input name="employer_position_held_' + listnumber + '" type="text" class="form-control" id="employer_position_held' + listnumber + '"  >' +
                '</div>' +
                '<div class="col-md-2 mb-2">' +
                '<label for="employer_position_held_from">Position held from</label>' +
                '<input name="employer_position_held_from_' + listnumber + '" type="text" class="form-control datetimepicker" autocomplete="off" id="employer_position_held_from"  >' +
                '</div>' +
                '<div class="col-md-2 mb-2">' +
                '<label for="position_held_to">Position held to</label>' +
                '<input name="employer_position_held_to_' + listnumber + '" type="text" class="form-control datetimepicker" autocomplete="off" id="employer_position_held_to' + listnumber + '"  >' +
                '</div>' +
                '<div class="col-md-2 mb-2">' +
                '<label for="employer_salary">Salary</label>' +
                '<input name="employer_salary_' + listnumber + '" type="text" class="form-control" id="employer_salary' + listnumber + '"  >' +
                '</div>' +
                '<div class="col-md-3 mb-2">' +
                '<label for="employer_salary">Reasons for leaving</label>' +
                '<input name="employer_leaving_' + listnumber + '" type="text" class="form-control" id="employer_leaving' + listnumber + '"  >' +
                '</div>' +
                '</div>' +
                '<div class="form-row">' +
                '<div class="col-md-12 mb-4">' +
                '<label for="employer_explaned">Any gaps in employment and/or unemployment must be explained.  Include dates (month/year) and reason:   </label>' +
                '<input name="employer_explaned_' + listnumber + '" type="text" class="form-control" id="employer_explaned' + listnumber + '"   >' +
                '</div>' +
                '</div>' +
                '<div class="form-row">' +
                '<div class="col-md-10 mb-2">' +
                'Were you subject to the Federal Motor Carrier Safety Regulations (FMCSRs) while employed by the previous employer?' +
                '</div>' +
                '<div class="col-md-2 mb-2">' +
                '<select class="form-control" name="employer_subject_Safety_Regulations_' + listnumber + '">' +
                '<option >--</option>' +
                '<option value="yes">Yes</option>' +
                '<option value="no">No</option>' +
                '</select>' +
                '</div>' +
                '</div>' +
                '<div class="form-row border-bottom border-bottom-4 border-success">' +
                '<div class="col-md-10 mb-3">' +
                'Was the previous job position designated as a safety sensitive function in any DOT regulated mode, subject to alcohol and controlled substances testing requirements as   by 49 CFR Part 40?' +
                '</div>' +
                '<div class="col-md-2 mb-3">' +
                '<select class="form-control" name="employer_subject_to_alcohol_' + listnumber + '">' +
                '<option >--</option>' +
                '<option value="yes">Yes</option>' +
                '<option value="no">No</option>	' +
                '</select>' +
                '</div>' +
                '</div>' +
                '<div style="height: 20px;"></div>' +
                '</li>'
            );
        }
    });

    $('#accident').on('click', function () {
        var listnumber = $("#accidentlist li").length;
        if (listnumber < 10) {
            $("#accidentlist").append(
                '<li id="accidentLIlist' + listnumber + '">' +
                '<div class="form-row border-bottom border-bottom-4 border-success">' +
                '<div class="col-md-2 mb-3">' +
                '<input name="accident_accident_date_' + listnumber + '" type="text" class="form-control datetimepicker" id="accident_date' + listnumber + '"  autocomplete="off" placeholder="DATES:">' +
                '</div>' +
                '<div class="col-md-4 mb-3">' +
                '<input name="accident_nature_of_accident_' + listnumber + '" type="text" class="form-control" id="nature_of_accident' + listnumber + '" placeholder="NATURE OF ACCIDENT (HEAD-ON , REAR-END , UPSET, ETC.)">' +
                '</div>' +
                '<div class="col-md-2 mb-3">' +
                '<input name="accident_number_fatalities_' + listnumber + '" type="number" class="form-control" id="number_fatalities' + listnumber + '" placeholder="NUMBER FATALITIES">' +
                '</div>' +
                '<div class="col-md-2 mb-3">' +
                '<input name="accident_number_injuries_' + listnumber + '" type="number" class="form-control" id="number_injuries' + listnumber + '" placeholder="NUMBER INJURIES">' +
                '</div>' +
                '<div class="col-md-2 mb-3">' +
                '<select class="form-control" name="accident_chemical_spill_' + listnumber + '" >' +
                '<option value="yes" selected="CHEMICAL SPILLS">CHEMICAL SPILLS</option>' +
                '<option value="yes">Yes</option>' +
                '<option value="no">No</option>' +
                '</select>' +

                '</div>' +
                '</div>' +
                '<div style="height: 20px;"></div>' +
                '</li>'
            );
        }
    });

    $('#trafic_conviction').on('click', function () {
        var listnumber = $("#convictilist li").length;
        if (listnumber < 10) {
            $("#convictilist").append(
                '<li id="convictiLIlist' + listnumber + '">' +
                '<div class="form-row border-bottom border-bottom-4 border-success">' +
                '<div class="form-row">' +
                '<div class="col-md-2 mb-3">' +
                '<input name="convicti_date_convicted_' + listnumber + '" type="text" class="form-control datetimepicker" id="date_convicted' + listnumber + '" autocomplete="off"  placeholder="DATE CONVICTED:">' +
                '</div>' +
                '<div class="col-md-3 mb-3">' +
                '<input name="convicti_violation_' + listnumber + '" type="text" class="form-control" id="violation' + listnumber + '"   placeholder="VIOLATION:">' +
                '</div>' +
                '<div class="col-md-3 mb-3">' +
                '<input name="convicti_state_violation_' + listnumber + '" type="text" class="form-control" id="state_violation' + listnumber + '"   placeholder="STATE OF VIOLATION LOCATION:">' +
                '</div>' +
                '<div class="col-md-4 mb-3">' +
                '<input name="convicti_penalty_' + listnumber + '" type="text" class="form-control" id="penalty' + listnumber + '"   placeholder="PENALTY (forfeited bond, collateral and/or points)">' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<div style="height: 20px;"></div>' +
                '</li>'
            );
        }
    });


    $('#previous').on('click', function () {
        var listnumber = $("#previouslist li").length;
        if (listnumber < 10) {
            $("#previouslist").append(
                '<li id="previousLIlist' + listnumber + '">' +
                '<div class="form-row border-bottom border-bottom-4 border-success">' +
                '<div class="col-md-3 mb-2">' +
                '<label for="address_street">Address Street:</label>' +
                '<input name="previous_address_street_' + listnumber + '" type="text" class="form-control" id="address_street' + listnumber + '" >' +
                '</div>' +
                '<div class="col-md-3 mb-2">' +
                '<label for="city">City:</label>' +
                '<input name="previous_city_' + listnumber + '" type="text" class="form-control" id="city' + listnumber + '" >' +
                '</div>' +
                '<div class="col-md-2 mb-2">' +
                '<label for="state">State:</label>' +
                '<input name="previous_state_' + listnumber + '" type="text" class="form-control" id="state' + listnumber + '" >' +
                '</div>' +
                '<div class="col-md-2 mb-2">'+
                '<label for="stateZip0">Zip code:</label>'+
                '<input name="previous_stateZip_' + listnumber + '" type="text" class="form-control" id="stateZip' + listnumber + '" >'+
                '</div>'+
                '<div class="col-md-2 mb-2">' +
                '<label for="how_long"># Years:</label>' +
                '<input name="previous_how_long_' + listnumber + '" type="text" class="form-control" id="how_long' + listnumber + '" >' +
                '</div>' +
                '</div>' +
                '<div style="height: 20px;"></div>' +
                '</li>'
            );
        }
    });


    function remove(employrid) {
        $('#' + employrid).live(function () {
            $(this).remove();
        });
    }


    var currentdate = new Date();
    var datetime = (currentdate.getMonth() + 1) + "/"
        + currentdate.getDate() + "/"
        + currentdate.getFullYear();
    /*  + currentdate.getHours() + ":"
     + currentdate.getMinutes() + ":";*/
    $('#user_time').val(datetime);

    $('.datetimepicker').datetimepicker({
        timepicker: false,
        format: 'm/d/Y',
    });

    $(document).on('click', function () {
        $('.datetimepicker').datetimepicker({
            timepicker: false,
            format: 'm/d/Y',
        });
    });

 

var curenturl = $(location).attr('href');
 $('#urlprezent').val(curenturl);



$("form").submit(function () {
    $('#notification').css('display', 'block');
});


 $("input:file").change(function (event){ 
    var curentfile = event.target.id;

   if (this.files[0].size > 7599999){
        $('#' + curentfile).next().css('display', 'block');
        $(":submit").attr('disabled', true);
   }

   if (this.files[0].size < 7599999){
        $('#' + curentfile).next().css('display', 'none');
        $(":submit").attr('disabled', false);
   }


});



});

