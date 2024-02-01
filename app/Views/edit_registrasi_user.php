<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Edit Departement</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_edit_registrasi_user')?>" method="post">
        <input type="hidden" name="id" value="<?= $ferdi->id_registrasi_user ?>">
        
        
         <div class="item form-group">
          <label class="control-label col-12" >Nama<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" name="nama" placeholder="Isi Nama" required="required" class="form-control col-12" value="<?= $ferdi->nama?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Harga<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="harga" name="harga" placeholder="Isi Harga" required="required" class="form-control col-12" value="<?= $ferdi->harga?>">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jumlah<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jumlah" name="jumlah" placeholder="Isi Jumlah" required="required" class="form-control col-12" value="<?= $ferdi->jumlah?>">
          </div>
        </div>
     


       <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-6 col-md-offset-3">
            <a href="/home/registrasi_user" type="submit" class="btn btn-primary">Cancel</a></button>
            <button id="send" type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
