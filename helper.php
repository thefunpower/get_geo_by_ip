<?php  
/**
* 根据IP返回城市信息
* example
* <code>
* $arr = get_geo_by_ip('116.233.91.158');
* print_r($arr); 
* Array
* (
*     [title] => China
*     [title_cn] => 中国
*     [city] => Shanghai
*     [city_cn] => 上海
*     [lat] => 31.2222
*     [lng] => 121.4581
*     [isoCode] => CN
* )
* </code>
*/
function get_geo_by_ip($ip){
	$reader = new GeoIp2\Database\Reader(__DIR__.'/GeoLite2-City.mmdb'); 
	$record = $reader->city($ip); 
	$arr = []; 
	$arr['title'] = $record->country->name; 
	$arr['title_cn'] = $record->country->names['zh-CN'];  
	$arr['city'] = $record->city->name; 
	$arr['city_cn'] = $record->city->names['zh-CN'];    
	$arr['lat'] = $record->location->latitude; 
	$arr['lng'] = $record->location->longitude; 
	$arr['isoCode'] = $record->country->isoCode ; 
	return $arr; 
} 

