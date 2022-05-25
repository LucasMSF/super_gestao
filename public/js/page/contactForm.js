const IP_API_URL = 'https://api.ipify.org?format=json';
const GEO_LOCATION_URL = 'http://localhost:8888/api/geolocation/';

$(document).ready(function () {
    $.get(IP_API_URL, (response) => {
        console.log(response.ip);
        $('#ip').val(response.ip)

        /* $.get(GEO_LOCATION_URL + response.ip, (response) => {
            console.log(response);
        }); */
    });

    $.get("http://localhost:8888/api/getContacts",
        function (res) {
            console.log(res)   
        },
        "JSON"
    );
    
    $('#tel').mask('(00) 00000-0000');
});