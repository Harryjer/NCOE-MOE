// alert("click123");
$("#btnNew").click(function() {
  //     //alert("click");
  location.href = "index7.php";
});

$("#btnAdd").click(function() {
  // alert("click");
  $.ajax({
    url: "coursedetailsubmission.php",
    data: $("#courseDetailsForm").serialize(),
    type: "POST",
    dataType: "json",
    success: function(data) {
      alert(data);
      if (data) {
        alert("successfully inserted.");
      } else {
        alert("failed. try again.");
      }
      $("#courseDetailsForm").trigger("reset");
      // $("#div1").html(result);
    }
  });
});

$("#religiondetails_idreligiondetails").change(function() {
  //alert($("#religiondetails_idreligiondetails").val());
  //alert("click");
  $.ajax({
    url: "getCourse.php",
    data: { id: $("#religiondetails_idreligiondetails").val() },
    type: "POST",
    dataType: "json",
    success: function(data) {
      $("#coursenames").val(data["name"]);
      $("#idcoursenames").val(data["id"]);
      $("#coursedescription").val(data["desc"]);
    }
  });
});
// alert("clickcccc123");
