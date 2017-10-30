

  jQuery('.autocomplete-location').autocomplete({
        lookup: locations,
    });

// Location Map Function
//-------------------------------------------------------------------------------

    function loadMap(addressData) {
        var mapMarker = xsUrl + '/assets/images/mapmarker.png';
        
        var path = document.URL;

        var locationContent = "<h2>" + companyName + "</h2>"
                + "<p>" + addressData + "</p>";

        jQuery('#locations .map').gmap3({
            map: {
                options: {
                    maxZoom: 15,
//                    maxZoom: 0,
//                setZoom: 15,
//                zoom: 15,
                    scrollwheel: false,
                }
            },
            infowindow: {
                address: addressData,
                options: {
                    content: locationContent
                }
            },
            marker: {
                address: addressData,
                options: {
                    icon: new google.maps.MarkerImage(
                            mapMarker,
                            new google.maps.Size(59, 58, "px", "px"),
                            new google.maps.Point(0, 0), //sets the origin point of the icon
                            new google.maps.Point(29, 34)   //sets the anchor point for the icon
                            )
                }
            }
        },
        "autofit");
    }

    loadMap(locations[0].value);
    jQuery("#location-map-select").append('<option value="' + locations[0].value + '">' + sLocation + '</option>');
    jQuery.each(locations, function (index, value) {
        var option = '<option value="' + value.value + '">' + value.value + '</option>';
        jQuery("#location-map-select").append(option);
    });

    jQuery('#location-map-select').on('change', function () {
        jQuery('#locations .map').gmap3('destroy');
        loadMap(this.value);
    });
