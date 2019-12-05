$("#btnNew1").click(function() {
  alert("click");
  location.href = "index5.php";
});

$("#btnAdd").click(function() {
  //alert("click");
  $.ajax({
    url: "sportdetaillsubmission.php",
    data: $("#sportDetailsForm").serialize(),
    type: "POST",
    dataType: "json",
    success: function(data) {
      //alert(data);
      if (data) {
        alert("successfully inserted.");
      } else {
        alert("failed. try again.");
      }
      $("#sportDetailsForm").trigger("reset");
      // $("#div1").html(result);
    }
  });
  //alert("clickcccc123");
});
