<?php

namespace Cisco;

class dailer
{
    public function dail($dail, $ip)
    {

		$xml = '<CiscoIPPhoneExecute>
					<ExecuteItem URL="Dial:'.$dial.'"/>
				</CiscoIPPhoneExecute>
		';

		$url = 'http://'.$ip.'/CGI/Execute';

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, "XML=".$xml);
		$content=curl_exec($ch);

    }
}
