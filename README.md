NSEFinance-PHP
=================

PHP Library for NSEFinance



```php
<?php
include_once('class.php');

$stocks = new NSEFinance();


#Get daily price list
/*Available keys :
[u'high', u'symbol', u'value', u'deals', u'date', u'low', u'units', u'close', u'open', u'change']
*/

$results = $stocks->get_daily_list();
foreach((array) $results as $result)
{
	$data = (array) $result;
	echo $data['symbol']."\n";
}

#Get the closing price for the last 5 trading day for a symbol
$result = $stocks->get_by_symbol("OANDO");
for($i = 0; $i <  count($result); $i++)
{
	$data = (array) $result[$i];
	echo $data['close']."\n";
}

#Get the closing price for a particular symbol on a particular day
$symbol = "OANDO";
$result = $stocks->get_by_symbol($symbol,"2014-02-06");
$data = (array) $result;
$result = (array) $data[$symbol];
echo $result['close']."\n";
?>
```




Full documentation of for the api is available at [http://nsefinance.com/docs](http://nsefinance.com/docs)