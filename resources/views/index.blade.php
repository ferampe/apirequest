<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Request Form</title>

  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" rel="stylesheet" >
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
 
  <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>


  <script src="https://cdn.jsdelivr.net/vue/1.0.24/vue.min.js"></script>

  <style>

    body { padding-top: 70px; }

    #reportrange {
      background: #ffffff;
      -webkit-box-shadow: 0 1px 3px rgba(0,0,0,.25), inset 0 -1px 0 rgba(0,0,0,.1);
      -moz-box-shadow: 0 1px 3px rgba(0,0,0,.25), inset 0 -1px 0 rgba(0,0,0,.1);
      box-shadow: 0 1px 3px rgba(0,0,0,.25), inset 0 -1px 0 rgba(0,0,0,.1);
      color: #333333;
      padding: 8px;
      line-height: 18px;
      cursor: pointer;
    }
    #reportrange .caret {
      margin-top: 8px;
      margin-left: 2px;
    }
    #reportrange span {
      padding-left: 3px;
    }


    .pagination{
      margin: 5px 0;
    }

  </style>
</head> 
<body id="data-request">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        
	        <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		          <span class="sr-only">Toggle navigation</span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="#">Requests Panel</a>
	      	</div>

        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	          <p class="navbar-text navbar-right"> <a href="{{ url('logout') }}" class="navbar-link">Logout</a></p>
	        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="row">

        <div class="col-sm-12 col-md-12">
           <div class="table-responsive" id="form_request_items">
              <table class="table table-striped table-hover" >

                <thead> 
                  <tr>
                    <!--<th>Send</th>-->
                    <th>Date</th>
                    <th>Domain</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Assigned to</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>

	                <tr v-for="item in items">
	                  <td>@{{ item.names }}</td>
	                  <td>@{{ item.domain }}</td>
	                  <td>@{{ item.names }}</td>
	                  <td>@{{ item.status }}</td>
	                  <td>Alisha</td>
	                  <td>Action</td>
                  	</tr>

                  </tbody>
              </table>
            </div>

        </div>
      </div><!-- end row -->
    </div>


    <!-- Modal -->




    <script>
      new Vue({
          el: '#form_request_items',
          data: {
              items: []
          },
          ready: function () {
	          var self = this;

	          //console.log(typeof this.items);

	          $.ajax({
	              url: '{{ url('api/v1/form_request') }}',
	              method: 'GET',
	              success: function (data) {

	              	  //console.log(data);
	                  self.items = JSON.parse(data);
	                  //console.log(typeof self.items);
	              },
	              error: function (error) {
	                  alert(JSON.stringify(error));
	              }
	          });
          }
      });



  </script>



</body>
</html>
