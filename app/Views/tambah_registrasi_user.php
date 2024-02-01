<div class="card card-info">
              <div class="card-header">
                <!-- <h3 class="card-title">Tambah Nasabah</h3> -->
              <!-- </div> -->
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal form-label-left" novalidate  action="<?= base_url('home/aksi_tambah_registrasi_user')?>" method="post">
                <h1></h1>
        
        <div class="item form-group">
          <label class="control-label col-12" >Nama<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="nama" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="nama" required="required" placeholder="Isi Nama">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Harga<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="harga" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="harga" required="required" placeholder="Isi Harga">
          </div>
        </div>
        <div class="item form-group">
          <label class="control-label col-12" >Jumlah<span class="required"></span>
          </label>
          <div class="col-12">
            <input type="text" id="jumlah" class="form-control col-12" data-validate-length-range="6" data-validate-words="2" name="jumlah" required="required" placeholder="Isi Jumlah">
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
            </div>