
//alert("click123");
$("#btnNew").click(function(){ //alert("click");
    location.href="index3.php";
});

$("#btnAdd1").click(function(){ //alert("click");
    $.ajax({
        url: "a_lresultssubmission.php",
        data: $("#alDetailsForm").serialize(), 
        type: "POST",
        dataType: "json",
        success: function(data){
            //alert(data);
            if(data){
                alert("successfully inserted.");
            }else{
                alert("failed. try again.");
            }
            $('#alDetailsForm').trigger("reset");
            // $("#div1").html(result);
    }});
   //alert("clickcccc123");
});

