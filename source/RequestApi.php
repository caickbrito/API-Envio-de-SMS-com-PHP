<?php 

namespace Source;


/**
 * summary
 */
class RequestApi
{	
	protected $numberDestino;
	protected $textSend;
	private $access_token;
	public $data;
	protected $fail;


	public function query(string $numberOrigin, string $numberDestino, string $text, string $access_token = SMS_TOKEN)
	{	
		$this->numberOrigin = $numberOrigin;
		$this->numberDestino = $numberDestino;
		$this->access_token = $access_token;
		$this->text = $text;

		$data = ["origem" => $this->numberOrigin, "destino" => $this->numberDestino, "access_token" => $this->access_token,
		"texto" => $this->text];
		
		$this->data = http_build_query($data);

		return $this->data;
	}

	public function send()
	{		
		
		$urlSms = "https://api.directcallsoft.com/sms/send";
		$ch = curl_init($urlSms);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		$this->data = json_decode(curl_exec($ch));

		echo "Resultado do envio: {$this->data->msg}";
		}		
}