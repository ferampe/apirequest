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
  <link href="{{ url('js/bootstrap-daterangepicker-master/daterangepicker-bs3.css') }}" rel="stylesheet">
 
  <script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{ url('js/bootstrap-daterangepicker-master/moment.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/bootstrap-daterangepicker-master/daterangepicker.js') }}"></script>
  <script type="text/javascript" src="{{ url('js/bootstrap-checkbox.min.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.min.js"></script>

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

      <div class="row" style="background:#F5F5F5; padding: 10px">
        <div class="col-md-12">
        
        


          <form method="POST">
          <div id="reportrange" class="pull-left">
              <i class="fa fa-calendar fa-lg"></i>
              <span>{{ date("F j, Y", strtotime($dateFrom)) }} - {{ date("F j, Y", strtotime($dateTo)) }}</span> <b class="caret"></b>
          </div>
          &nbsp;&nbsp;
          <!--<input type="hidden" name="dateFrom" id="dateFrom" value="<?=$dateFrom?>" />
          <input type="hidden" name="dateTo" id="dateTo" value="<?=$dateTo?>" />
           <input type="submit" value="Check" class="btn btn btn-primary">-->
          
          <a href='{{ url("domain") }}' class="btn btn-primary" id="check" >Check</a>
          </form>
          
        </div>
      </div>
    

      <div class="row">
        <div class="col-sm-12 col-md-12">        
          <h3><span class="label label-default"> {{ $formRequests->total() }} Requests</span></h3>          
        </div>
      </div>
      


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

                    <tr v-repeat="Item in Items">
                      <td>@{{Item.created_at}}</td>
                      <td>@{{Item.domain}}</td>
                      <td>@{{Item.names}}</td>
                      <td>@{{Item.status}}</td>
                      <td>Alisha</td>
                      <td>Action</td>
                  </tr>

                  </tbody>
              </table>
            </div>

        </div>
      </div><!-- end row -->

      <div class="row">
        <div class="col-sm-12 col-md-12">
          @yield('pagination')
        </div>
      </div>


    </div>


    <!-- Modal -->
    @include('modal')

    <!-- Modal Wait Dialog-->
    <div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-header">
            <h1>Processing...</h1>
        </div>
        <div class="modal-body">
            <div class="progress progress-striped active">
                <div class="bar" style="width: 100%;"></div>
            </div>
        </div>
    </div>


    <script>
      var ItemsVue = new Vue({
          el: '#form_request_items',
          data: {
              Items: []
          },
          ready: function () {
              var self = this;
              $.ajax({
                  url: '{{ url('api/v1/form_request') }}',
                  method: 'GET',
                  success: function (data) {
                      console.log(data);
                      self.Items = data;
                  },
                  error: function (error) {
                      alert(JSON.stringify(error));
                  }
              });
          }
      });
    </script>


 <script>
    $(document).ready(function(){

     

      var url = "{{ url('/')}}";
      var domain = "peruforless";
      var span = "1";
      
      $(".btn_popup").bind('click', function(){
          getRequestData($(this).attr("id"));
      });

      $("#linkSendEmail").bind("click", function(){
        
        sendRequestData($(this).attr("codi"));
      });

      $('#reportrange').daterangepicker(
          {
            ranges: {
               'Today': [moment(), moment()],
               'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
               'Last 7 Days': [moment().subtract('days', 6), moment()],
               'Last 30 Days': [moment().subtract('days', 29), moment()],
               'This Month': [moment().startOf('month'), moment().endOf('month')],
               'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            startDate: moment().subtract('days', 29),
            endDate: moment()
          },
          function(start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
              /*$("#dateFrom").val(start.format('YYYY-M-D'));
              $("#dateTo").val(end.format('YYYY-M-D'));*/
              $('#check').attr('href', "");
              $('#check').attr('href', url+"/domain/"+domain+"/"+span+"/"+start.format('YYYY-M-D')+"/"+end.format('YYYY-M-D'));

          }
      );

    });



    function getRequestData(id){
      $.ajax({
          type: "GET",
          url: "{{ url('api/request/get_request/') }}/"+id,
          async: false,
          success: function(datos){
            $("#dataRequest").html(datos);                       
            $("#linkSendEmail").attr('codi', id);
            $('myModal').modal();
          }
      });
    }

    function sendRequestData(id){

      $.ajax({
          type: "GET",
          url: "{{ url('send_email') }}/"+$("#linkSendEmail").attr('codi'),          
          async: false,
          success: function(datos){
            alert("Success");
          }
      });

      return false;
    }

    $(':checkbox').checkboxpicker();

  </script>


  <script>
    var myApp;
    myApp = myApp || (function () {
    var pleaseWaitDiv = $('<div class="modal hide" id="pleaseWaitDialog" data-backdrop="static" data-keyboard="false"><div class="modal-header"><h1>Processing...</h1></div><div class="modal-body"><div class="progress progress-striped active"><div class="bar" style="width: 100%;"></div></div></div></div>');
    return {
        showPleaseWait: function() {
            pleaseWaitDiv.modal();
        },
        hidePleaseWait: function () {
            pleaseWaitDiv.modal('hide');
        },

    };
})();
  </script>
</body>
</html>
