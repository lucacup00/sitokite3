prova.onclick = function () {
    var apiKey = "73f81ed4ae4a0d79c688840a765d59bb";
    const city = document.getElementById("weath").value;
    city.className = "cityy";
    var uri =
      "http://api.openweathermap.org/data/2.5/weather?q=" +
      city +
      "&appid=" +
      apiKey;
    console.log(document.getElementById("weath"));
    console.log(uri);
  
    var request = new XMLHttpRequest();
    request.open("GET", uri, true);
    request.onload = function () {
      if (request.status >= 200 && request.status < 400) {
        var data = JSON.parse(this.response);
        var meteo = data.weather[0].main;
        console.log(meteo);
        var temp = data.main.temp;
        temp = parseInt(temp) - 273;
        var windiz = data.wind.speed;
  
        if (meteo == "Clear") {
          meteo = "soleggiato";
          document.getElementById("immagineTempo").src = "./img/sun2.png";
        } else {
          meteo = "nuvoloso";
          document.getElementById("immagineTempo").src = "https://i.imgur.com/Qw7npIg.png";
        }
        
        const d = new Date();
        a=document.getElementById("orario").innerHTML = d.getHours()+":"+d.getMinutes(); 
        


        citta= document.getElementById("Citta").innerHTML =city;

        ris = document.getElementById("gradi").innerHTML =
           temp + "°C ";

           document.getElementById("meteo").innerHTML =
          meteo;
  
        ris3 = document.getElementById("vento").innerHTML =
           windiz + "km/h";
        console.log(data);
      } else {
        document.getElementById("ris").innerHTML = "ERRORE GENERICO";
      }
    };
    request.send();
  };