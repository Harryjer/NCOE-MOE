var religionId;
$("#budhismform, #christianform, #hinduform, #islamform").hide();

$("#religiondetails_idreligiondetails").change(function() {
  idreligiondetails = $("#religiondetails_idreligiondetails").val();
  //alert(religionId);
  if (idreligiondetails == 1) {
    $("#budhismform").show();
    $("#christianform").hide();
    $("#hinduform").hide();
    $("#islamform").hide();
  } else if (idreligiondetails == 2) {
    $("#hinduform").show();
    $("#budhismform").hide();
    $("#christianform").hide();
    $("#islamform").hide();
  } else if (idreligiondetails == 3) {
    $("#budhismform").hide();
    $("#hinduform").hide();
    $("#christianform").show();
    $("#islamform").hide();
  } else if (idreligiondetails == 4) {
    $("#islamform").show();
    $("#hinduform").hide();
    $("#christianform").hide();
    $("#budhismform").hide();
  }
});

//alert("click123");
$("#btnNew2").click(function() {
  //alert("click");
  location.href = "index6.php";
});

$("#btnAdd2").click(function() {
  //alert("click");
  $.ajax({
    url: "religiousdetailsubmission.php",
    data: $("#religiousDetailsForm").serialize(),
    type: "POST",
    dataType: "json",
    success: function(data) {
      alert(data);
      if (data) {
        alert("successfully inserted.");
      } else {
        alert("failed. try again.");
      }
      $("#religiousDetailsForm").trigger("reset");
      // $("#div1").html(result);
    }
  });
  alert("clickcccc123");
});
$("#btnAdd4").click(function() {
  alert("click4");
  $.ajax({
    url: "hindudetailsubmission.php",
    data: $("#hinduDetailsForm").serialize(),
    type: "POST",
    dataType: "json",
    success: function(data) {
      alert(data);
      if (data) {
        alert("successfully inserted.");
      } else {
        alert("failed. try again.");
      }
      $("#hinduDetailsForm").trigger("reset");
      // $("#div1").html(result);
    }
  });
  //alert("clickcccc123");
});

$("#btnNew3").click(function() {
  //alert("click");
  location.href = "index6.php";
});

$("#btnAdd3").click(function() {
  //alert("click");
  $.ajax({
    url: "christiandetailsubmission.php",
    data: $("#christianDetailsForm").serialize(),
    type: "POST",
    dataType: "json",
    success: function(data) {
      alert(data);
      if (data) {
        alert("successfully inserted.");
      } else {
        alert("failed. try again.");
      }
      $("#christianDetailsForm").trigger("reset");
      // $("#div1").html(result);
    }
  });
  //alert("clickcccc123");
});

$("#btnNew4").click(function() {
  //alert("click");
  location.href = "index6.php";
});

$("#btnNew5").click(function() {
  //alert("click");
  location.href = "index6.php";
});

$("#btnAdd5").click(function() {
  //alert("click");
  $.ajax({
    url: "islamdetailsubmission.php",
    data: $("#islamDetailsForm").serialize(),
    type: "POST",
    dataType: "json",
    success: function(data) {
      alert(data);
      if (data) {
        alert("successfully inserted.");
      } else {
        alert("failed. try again.");
      }
      $("#islamDetailsForm").trigger("reset");
      // $("#div1").html(result);
    }
  });
  //alert("clickcccc123");
});
