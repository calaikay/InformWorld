
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header danger-color">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title danger-color white-text">Contribute</h4>
      </div>
      <div class="modal-body">
            <form method="POST" action="/contribute" enctype="multipart/form-data" style="margin-top:-30px">
                {{csrf_field()}}
                 <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="text" id="form1" name="fullname" class="form-control" required placeholder="Fullname">
                    </div>
                </div>
                 <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="date" id="form1" name="date" class="form-control" required>
                    <label style="margin-top:-20px;margin-left:20px;"> Date</label>
                    </div>
                </div>
                <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="time" name="time" id="form1" placeholder="Enter time here" class="form-control" required>
                     <label style="margin-top:-20px;margin-left:20px;">Time</label>
                    </div>
                </div>
                <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="text" name="place" id="form1" placeholder="Enter nearest place here" class="form-control" required>
                    </div>
                </div>
                <div class="md-form">
                    <div class="col-md-12">
                    <select name="landslide_type" required>
                        <option value="" disabled selected>Choose Landslide type here</option>
                        <option>Slide</option>
                        <option>Creep</option>
                        <option>Slump</option>
                        <option>Toople</option>
                        <option>Fall</option>
                        <option>Torrent</option>
                    </select>
                    </div>
                </div>
                <div class="md-form" >
                    <div class="col-md-12" style="padding-top:10px">
                    <select name="reason" required>
                        <option value="" disabled selected>Choose the reason of landslide</option>
                        <option>Rainfall</option>
                        <option>Downpour</option>
                        <option>Unknown</option>
                    </select>
                    </div>
                </div>

                <div class="md-form">
                  <div class="col-md-12"> 
                    <input type="text" name="description" id="form1" placeholder="Enter location description here" class="form-control" >
                    </div>
                </div>

                    <div class="md-form">
                    <div class="col-md-12"> 
                    <input type="text" name="accuracy" id="form1" placeholder="Enter accuracy here" class="form-control" required>
                    </div>
                </div>

                 <div class="md-form">
                    <div class="col-md-12"> 
                    <label class="label" style="margin-top:-25px">Upload sample photo</label>
                    <input type="file"  style="padding:10px" name="photo" id="photo" required>
                    </div>
                </div>

                <button class="btn btn-danger" type="submit">Add</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </form>
            </div>
    </div>

  </div>
</div>
</div>