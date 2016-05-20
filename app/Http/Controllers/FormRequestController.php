<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use ApiRequest\FormRequest\FormRequestUtil;
use ApiRequest\FormRequest\FormRequest;

class FormRequestController extends Controller {

	private $formRequestUtil;

	public function __construct()
	{
		$this->formRequestUtil = new FormRequestUtil;
	}

	public function index()
	{
		$formRequest = FormRequest::all(['id', 'names', 'email', 'domain', 'status', 'created_at'])->toJson();

		return response()->json($formRequest);
	}






	


	public function store(Request $request)
	{
		
		$metaInfoCountry = $this->formRequestUtil->getDataIp('190.117.192.53');
		 
		$request->offsetSet('api_ip', (isset($metaInfoCountry->ipAddress) ? $metaInfoCountry->ipAddress : ''));
		$request->offsetSet('api_country', (isset($metaInfoCountry->countryName) ? $metaInfoCountry->countryName : ''));
		$request->offsetSet('api_city', (isset($metaInfoCountry->cityName) ? $metaInfoCountry->cityName : ''));

		$span = $this->formRequestUtil->isSpan($request->all());
		$request->offsetSet('span', $span);

		$bodyEmail = $this->formRequestUtil->getBodyEmail(['request' => $request->all()]);
		$request->offsetSet('body_email', $bodyEmail);

		$formRequest = new FormRequest;
		$formRequest->fill($request->input());
		$formRequest->save();

		if(!$span)
		{
			// enviar formRequest
			// enviar response
		}
	}

	public function getRequest($id)
	{
		$this->formRequestUtil = new FormRequestUtil;
		$formRequest = FormRequest::find($id);
		return $this->formRequestUtil->getBodyEmail(['request' => $formRequest->toArray()], false);
		
	}

	public function getRequestsAll()
	{
		$formRequest =  FormRequest::all()->toJson();

		return response()->json($formRequest);

	}

 

	

	

}
