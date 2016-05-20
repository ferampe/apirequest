<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Contact</h2>

		<p>
			<strong>Url:</strong> {{ (isset($request['url']) ? $request['url'] : null ) }}
		</p>

		<p>
			<strong>Token:</strong> {{ (isset($request['token']) ? $request['token'] : null ) }}
		</p>

		<hr/>

		<p>	
			<strong>Name:</strong>
			{{ (isset($request['names']) ? $request['names'] : null ) }}
		</p>

		<p>	
			<strong>Email:</strong>
			{{ (isset($request['email']) ? $request['email'] : null ) }}
		</p>

		<p>	
			<strong>Phone:</strong>
			{{ (isset($request['phone']) ? $request['phone'] : null ) }}
		</p>

		<p>	
			<strong>Tentative Dates:</strong>
			{{ (isset($request['tentative_dates']) ? $request['tentative_dates'] : null ) }}
		</p>

		<p>	
			<strong>Comment:</strong><br/>
			{{ (isset($request['comment']) ? $request['comment'] : null ) }}
		</p>


		<p>	
			<strong>Hotels:</strong><br/>
			{{ (isset($request['hotel']) ? $request['hotel'] : null ) }}
		</p>

		<p>	
			<strong>Travelers:</strong><br/>
			{{ (isset($request['travelers']) ? $request['travelers'] : null) }}
		</p>

		<p>	
			<strong>Length:</strong><br/>
			{{ (isset($request['length']) ? $request['length'] : null) }}
	
		</p>
			
		<!--<p>
			<strong>Yes, send me Peru For Less travel deals.</strong>
			{{ (isset($request['receive_newsletter']) ? "YES" : "NO") }}
		</p>-->

		<hr />	
		
		<p>	
			<strong>Ip:</strong>
			
			{{ (isset($request['ipAddress']) ? $request['ipAddress'] : null) }}
		</p>

		<p>	
			<strong>Country:</strong>

			{{ (isset($request['countryName']) ? $request['countryName'] : null) }}
		</p>

		<p>	
			<strong>Region:</strong>

			{{ (isset($request['regionName']) ? $request['regionName'] : null) }}
		</p>

		
	</body>
</html>
