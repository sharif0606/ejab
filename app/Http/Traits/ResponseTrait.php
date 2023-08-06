<?php
namespace App\Http\Traits;

trait ResponseTrait{
	public function responseMessage($status=true,$error=null,$message=null){
		return [
			'response' =>[
				'status' => $status,
				'errors' => $error,
				'message' => $message,
				'class' => $status?'success':'danger',
			]
		];
	}
}
