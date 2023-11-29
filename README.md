# get_geo_by_ip

根据IP获取城市信息

### 安装 

~~~
composer require thefunpower/get_geo_by_ip
~~~

### 调用

~~~
$arr = get_geo_by_ip('116.233.91.158');
print_r($arr); 
~~~

### 返回

~~~
Array
(
    [title] => China
    [title_cn] => 中国
    [city] => Shanghai
    [city_cn] => 上海
    [lat] => 31.2222
    [lng] => 121.4581
    [isoCode] => CN
)
~~~



###  GeoLite LICENSE

[CC Attribution-ShareAlike 4.0](https://dev.maxmind.com/geoip/geolite2-free-geolocation-data?lang=en)

### GeoLite.mmdb

[wp-statistics/GeoLite2-City](https://github.com/wp-statistics/GeoLite2-City.git)

[P3TERX/GeoLite](https://github.com/P3TERX/GeoLite.mmdb)



### LICENSE

[Apache License 2.0](LICENSE)

