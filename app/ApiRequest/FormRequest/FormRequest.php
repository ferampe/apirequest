<?php namespace ApiRequest\FormRequest;

use Illuminate\Database\Eloquent\Model;

class FormRequest extends Model {

	protected $table = 'requests';
	protected $fillable = ['url', 'domain', 'email', 'names', 'phone', 'comment', 'hotel', 'travelers', '	length', 'body_email', 'span', 'api_ip', 'api_country', 'api_city'];

}
