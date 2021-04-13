<?php
	
class WeatherData {
	public function get_weather($cityName){
		$key= API_KEY;
		$query_url= "https://api.openweathermap.org/data/2.5/weather?q=$cityName&appid=$key&units=metric";
		$json_weather = file_get_contents($query_url);
		$php_object= json_decode($json_weather);
		$weather_array =(array) $php_object;
		
		$weather['description']= (array) $weather_array['weather'][0];
		$weather['temperature']= (array) $weather_array['main'];
		
		$IP = $_SERVER['REMOTE_ADDR'];
		$RemoteIP_API_KEY = RemoteIP_API_KEY;
		$query_location = "http://api.ipinfodb.com/v3/ip-city/?key=$RemoteIP_API_KEY&ip=$IP";
		
		return $weather;
	}
}
?>