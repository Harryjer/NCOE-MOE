var idreligiondetails;
$("#personaldetailform, #alform, #olform, #sportform").hide();

$("#religiondetails_idreligiondetails").change(function() {
  idreligiondetails = $("#religiondetails_idreligiondetails").val();
  alert(idreligiondetails);
  if (idreligiondetails == 1) {
    $("#personaldetailform").show();
    $("#alform").hide();
    $("#sportform").hide();
    $("#olform").hide();
  } else if (idreligiondetails == 2) {
    $("#alform").show();
    $("#personaldetailform").hide();
    $("#olform").hide();
    $("#sportform").hide();
  } else if (idreligiondetails == 3) {
    $("#olform").show();
    $("#personaldetailform").hide();
    $("#alform").hide();
    $("#sportform").hide();
  } else if (idreligiondetails == 4) {
    $("#sportform").show();
    $("#alform").hide();
    $("#personaldetailform").hide();
    $("#olform").hide();
  }
});

$("#religiondetails_idreligiondetails").change(function() {
  //alert($("#religiondetails_idreligiondetails").val());
  //alert("click");
  $.ajax({
    url: "getPersonal.php",
    data: { id: $("#religiondetails_idreligiondetails").val() },
    type: "POST",
    dataType: "json",
    success: function(data) {
      // alert(data["districtdetails_iddistrictdetails"]);
      $("#fullname").val(data["fullname"]);
      $("#nameinitial").val(data["nameinitial"]);
      $("#paddress").val(data["paddress"]);
      $("#cnumber").val(data["cnumber"]);
      $("#nic").val(data["nic"]);
      $("#dob").val(data["dob"]);
      $("#attemptcount").val(data["attemptcount"]);
      $("#districtdetails_iddistrictdetails").val(
        data["districtdetails_iddistrictdetails"]
      );
      $("#genderdetails_idgenderdetails").val(
        data["genderdetails_idgenderdetails"]
      );
      $("#religiondetails_idreligiondetails").val(
        data["religiondetails_idreligiondetails"]
      );
      $("#ethnicity_idethnicity").val(data["ethnicity_idethnicity"]);
      // $("#coursenames").val(data["name"]);
    }
  });
});
// alert("clickcccc123");

$("#religiondetails_idreligiondetails").change(function() {
  //alert($("#religiondetails_idreligiondetails").val());
  //alert("click");
  $.ajax({
    url: "getAL.php",
    data: { id: $("#religiondetails_idreligiondetails").val() },
    type: "POST",
    dataType: "json",
    success: function(data) {
      // alert(data["districtdetails_iddistrictdetails"]);
      $("#academicyr").val(data["academicyr"]);
      $("#stream").val(data["stream"]);
      $("#medium").val(data["medium"]);
      $("#attempt").val(data["attempt"]);
      $("#subject1").val(data["subject1"]);
      $("#grade1").val(data["grade1"]);
      $("#subject2").val(data["subject2"]);
      $("#grade2").val(data["grade2"]);
      $("#subject3").val(data["subject3"]);
      $("#grade3").val(data["grade3"]);
      // $("#ethnicity_idethnicity").val(data["ethnicity_idethnicity"]);
      // $("#coursenames").val(data["name"]);
    }
  });
});
// alert("clickcccc123");

$("#religiondetails_idreligiondetails").change(function() {
  //alert($("#religiondetails_idreligiondetails").val());
  //alert("click");
  $.ajax({
    url: "getPersonal.php",
    data: { id: $("#religiondetails_idreligiondetails").val() },
    type: "POST",
    dataType: "json",
    success: function(data) {
      // alert(data["districtdetails_iddistrictdetails"]);
      $("#fullname").val(data["fullname"]);
      $("#nameinitial").val(data["nameinitial"]);
      $("#paddress").val(data["paddress"]);
      $("#cnumber").val(data["cnumber"]);
      $("#nic").val(data["nic"]);
      $("#dob").val(data["dob"]);
      $("#attemptcount").val(data["attemptcount"]);
      $("#districtdetails_iddistrictdetails").val(
        data["districtdetails_iddistrictdetails"]
      );
      $("#genderdetails_idgenderdetails").val(
        data["genderdetails_idgenderdetails"]
      );
      $("#religiondetails_idreligiondetails").val(
        data["religiondetails_idreligiondetails"]
      );
      $("#ethnicity_idethnicity").val(data["ethnicity_idethnicity"]);
      // $("#coursenames").val(data["name"]);
    }
  });
});
// alert("clickcccc123");
