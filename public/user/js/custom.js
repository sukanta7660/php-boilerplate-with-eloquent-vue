function getYear() {
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    document.querySelector("#displayYear").innerHTML = currentYear;
}

getYear();


function myMap() {
    var mapProp = {
        center: new google.maps.LatLng(40.712775, -74.005973),
        zoom: 18,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
}

$('#slide-submenu').on('click',function() {			        
    $(this).closest('.list-group').fadeOut('slide',function(){
        $('.mini-submenu').fadeIn();	
    });
    
  });

$('.mini-submenu').on('click',function(){		
    $(this).next('.list-group').toggle('slide');
    $('.mini-submenu').hide();
})

