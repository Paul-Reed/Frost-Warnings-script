<html>
<?php
 

//Change the weather underground API and city below
$json_string = file_get_contents("http://api.wunderground.com/api/your-api-key/forecast/q/pws:IFINNING3.json");
$parsed_json = json_decode($json_string);

$lowtemp = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[0]->{'low'}->{'celsius'};
//$timedate = $parsed_json->{'forecast'}->{'simpleforecast'}->{'forecastday'}[0]->{'date'}->{'pretty'};

//echo "\nTomorrows low temp is: ${lowtemp}\n";
//echo "\nForecast valid from: ${timedate}\n";


if ($lowtemp <= "3") { 
$url = "http://192.168.1.72/emoncms/Modules/event/scripts/boxscript/boxcar_send.php?msg=A%20low%20of%20${lowtemp}%20degreesC%20predicted%20tonight&title=Frost%20Alert%20";
echo $url;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$contents = curl_exec ($ch);
curl_close ($ch);
}

?>
</html>
