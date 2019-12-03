

$("#btnAdd").click(function(){ //alert("click");
$.ajax({
    url: "sportdetaillsubmission.php",
    //data: $("#sportDetailsForm").serialize(), 
    type: "POST",
    dataType: 'json',
    success: function(data){
        alert("data");
        // $("#div1").html(result);
}});
alert("clickcccc123");
});