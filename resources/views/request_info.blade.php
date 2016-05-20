<form class="form-horizontal" role="form">
  <div class="form-group">
    <label  class="col-sm-2 control-label">Token</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->token }}" readonly>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Date</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->date_request }}" readonly>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->names }}" readonly>
    </div>
  </div>



  <div class="form-group">
    <label  class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->email }}" readonly>
    </div>
  </div>


  <div class="form-group">
    <label  class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->telephone }}" readonly>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Url</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->url_page }}" readonly>
    </div>
  </div>


  <div class="form-group">
    <label  class="col-sm-2 control-label">Comment</label>
    <div class="col-sm-10">
      
      <textarea name="" id="" cols="45" rows="10">{{ $request->comments }}</textarea>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Hotels</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->hotels }}" readonly>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Travelers</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->travelers }}" readonly>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-2 control-label">Length</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" value="{{ $request->length }}" readonly>
    </div>
  </div>

</form>