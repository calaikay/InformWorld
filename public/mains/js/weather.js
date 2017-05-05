$(document).ready(function(){

	$('#submitWeather').click(function(){

		var city = $("#city").val();

		if (city != ""){

			$.ajax({

				url: 'http://api.openweathermap.org/data/2.5/weather?q=' + city + "&units=metric" + "&APPID=f7af87135e7d12c2fb9ab12ca7eac1a3",
				type: "GET",
				dataType: "jsonp",
				success: function(data){

					var widget = show(data);

					$("#show").html(widget);

					$("#city").val('');
					
				}

			});

		}else{
			$("#error").html('Field cannot be empty');
		}

	});



});


function show(data){
	return "<h4 style='font-size:18px;font-weight:bold'> Current Weather for "+ data.name + "," + data.sys.country + "</h4>" +
		"<h4><strong>Weather</strong>: "+ data.weather[0].main +"</h2>" +
		 "<h4><strong>Description</strong>: <img src='http://openweathermap.org/img/w/"+data.weather[0].icon+".png'>"+ data.weather[0].description +"</h2>" +
		 "<h4><strong>Temperature</strong>:"+ data.main.temp + " &deg;C</h2>" + 
		 "<h4><strong>Pressure</strong>:"+ data.main.pressure + " hPa</h2>" +
		 "<h4><strong>Humidity</strong>:"+ data.main.humidity + " %</h2>" +
		 "<h4><strong>Min. Temperature</strong>:"+ data.main.temp_min + " &deg;C</h2>" +
		 "<h4><strong>Max Temperature</strong>:"+ data.main.temp_max + " &deg;C</h2>" +
		 "<h4><strong>Wind Speed</strong>:"+ data.wind.speed + " m/s</h2>" +
		 "<h4><strong>Wind Direction </strong>:"+ data.wind.deg + " &deg;</h2>";
}











