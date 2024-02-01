<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_pendataan_brg')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_data ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Jenis Data<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jenis_data" name="jenis_data" placeholder="Isi Jenis Data" required="required" class="form-control col-12" value="<?= $ferdi->jenis_data?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Tanggal<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="date" id="tanggal" name="tanggal" placeholder="Isi Tanggal" required="required" class="form-control col-12" value="<?= $ferdi->tanggal?>">
          </div>
        </div>
     


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/pendataan_brg" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
