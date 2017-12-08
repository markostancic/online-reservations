      function initMap() {
          var options = {
              zoom : 12,
              center : {lat:44.787197, lng:20.457273}
          }
          
          var map = new google.maps.Map(document.getElementById('map'), options);
          
        var markers = [
        {
          coords:{lat:44.8224658, lng:20.45270640000001},
          content:'<h1>Kalemegdanska terasa</h1>'
        },
        {
          coords:{lat:44.8036715,lng:20.479383299999995},
          content:'<h1>Orašac</h1>'
        },
        {
          coords:{lat:44.8401594,lng:20.415558799999985},
          content: '<h1>Amaber</h1>'
        }
      ];
          
          for(var i=0; i<markers.length;i++){
              addMarker(markers[i]);
          }
          
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
        }
      }
      }