$(document).ready(function(){
$.ajax({
    url: "../../php/inboxview.php",
    type: "POST",
    cache: false,
    success: function(data){
        alert(data);
        $('#inbox').html(data); 
    }
});
});