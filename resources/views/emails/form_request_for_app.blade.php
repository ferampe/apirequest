
<p>
	<strong>Url:</strong> {{ (isset($request['url']) ? $request['url'] : null ) }}
</p>

<hr/>

<p>	
	<strong>Name:</strong>
	{{ (isset($request['names']) ? $request['names'] : null ) }} <br>

	<strong>Email:</strong>
	{{ (isset($request['email']) ? $request['email'] : null ) }} <br>

	<strong>Phone:</strong>
	{{ (isset($request['phone']) ? $request['phone'] : null ) }} <br>

	<strong>Tentative Dates:</strong>
	{{ (isset($request['tentative_dates']) ? $request['tentative_dates'] : null ) }} <br>

	<strong>Hotels:</strong>
	{{ (isset($request['hotel']) ? $request['hotel'] : null ) }} <br>

	<strong>Travelers:</strong>
	{{ (isset($request['travelers']) ? $request['travelers'] : null) }} <br>

	<strong>Length:</strong>
	{{ (isset($request['length']) ? $request['length'] : null) }}
</p>

<p>
	<strong>Comment:</strong><br/>
	{{ (isset($request['comment']) ? $request['comment'] : null ) }}
</p>


<hr />	

<p>	
	<strong>Ip:</strong>
	
	{{ (isset($request['ipAddress']) ? $request['ipAddress'] : null) }} <br>

	<strong>Country:</strong>

	{{ (isset($request['countryName']) ? $request['countryName'] : null) }} <br>

	<strong>Region:</strong>

	{{ (isset($request['regionName']) ? $request['regionName'] : null) }}
</p>


