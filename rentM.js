$(document).ready(function(){
    $(".rentme").click(function(){
        $.ajax({
            url: "acceuil.php",
            type: "GET",
            success: function(response){
                $("#donnees").html(response);
            }
        });
    });
});
// JavaScript to get current user location using browser's geolocation API
navigator.geolocation.getCurrentPosition(function(position) {
    document.getElementById('latitude').value = position.coords.latitude;
    document.getElementById('longitude').value = position.coords.longitude;
});
function showForm() {
    document.getElementById("connection").style.display = "block";
}