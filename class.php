<?php
class NSEFinance
{
	private $url = "http://127.0.0.1/api/stocks";
	
	private function data($symbol = "", $date="")	
	{
		if (empty($symbol))
		{
			$result = file_get_contents($this->url);
		}
		else if (!empty($symbol) && empty($datea))
		{
			$url = $this->url."/".$symbol;
			$result = file_get_contents($url);
		}
		else if (!empty($symbol) && !empty($date))
		{
			$url = $this->url."/".$symbol."/".$date;
			$result = file_get_contents($url);
		}

		return $result;
	}

	public function get_daily_list()
	{
		$data = $this->data();
		$result = json_decode($data);
		return $result;
	}

	public function get_by_symbol($symbol="", $date="")
	{
		if (empty($symbol))
		{
			throw new Exception("Symbol not supplied");
		}

		else if (empty($date))
		{
			$data = $this->data($symbol);
			$result = json_decode($data);
			return $result;
		}

		else if (isset($symbol) && isset($date))
		{
			$data = $this->data($symbol,$date);
			$result = json_decode($data);
			return $result;
		}

	}
}
?>