<div class="modal fade" id="modal_check_reservasi">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Reservasi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="form-floating mt-2 mb-2">
         <select class="form-select mt-3" id="proses" name="proses">
           <option value="1"> Selesai Checkin </option> 
           <option value="0"> Dalam Proses </option> 
           <option value="3"> Batal </option>   
          </select>
           <label for="idkamar">Proses</label>
         </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="id_proses" >Proses</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>