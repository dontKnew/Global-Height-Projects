<!-- The Modal -->
  <div class="modal fade" id="percentageModel">
    <div class="modal-dialog">
      <div class="modal-content">    
        <!-- Modal body -->
        <div class="modal-body">
              <form action="api/dynamic_content.php" method="POST">
                  <div class="form-group">
                     <input type="text" name="percentage_text" class="form-control">
                  </div>
                <div class="d-flex justify-content-center">
                    <button id="percentageUpdate" name="percentage_text" class="btn btn-primary" >Update</button>
                    <button type="button" class="btn btn-danger mx-1" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
        
      </div>
    </div>
  </div>
  