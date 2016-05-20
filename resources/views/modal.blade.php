<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Full Data Request</h4>
      </div>

      <div class="modal-body">

        <div style="margin-bottom: 10px">
          
          <div class="form-group">
            <label for="sales">Assigned to:</label>
            <select name="sales" v-model="name_sales" class="form-control">
              <option value="Alisha">Alisha</option>
              <option value="Laura">Laura</option>
              <option value="Kristi">Kristi</option>
              <option value="Megan">Megan</option>
              <option value="Michael">Michael</option>
              
            </select>
          </div>
        </div>
       
        <div id="dataRequest" style="background-color: #f5f5f5; padding: 5px">
        	
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-primary" id="linkSendEmail" codi="" >Send Email</a>            
      </div>

    </div>
  </div>
</div>