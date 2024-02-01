<?php

namespace App\Controllers;
use CodeIgniter\Controllers; 
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Home extends BaseController
{
    public function index()
    {
  //    echo view('header');
        // echo view('menu');
        // echo view('footer');
        

        $model=new M_model();
        echo view('login');
    }

    public function aksi_login()
    {
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('password');
        $model = new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>$p
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

        }else {
        return redirect()->to('/home/dashboard');
    }
}

    public function log_out()
    {
        // if(session()->get('id')>0) {

         session()->destroy();
         return redirect()->to('/');

    //  }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }

    public function dashboard()
    {
        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
    }

    public function user()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('user');

        $id = session()->get('id');
        $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('user');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    // public function tambah_user()
    // {
    //     $model = new M_model();
    //     $kui['ferdi']=$model->tampil('user');
    //     echo view('header');
    //     echo view('menu');
    //     echo view('v_tambah_user',$kui);
    //     echo view('footer');
    // }

    // public function aksi_tambah_user()
    // {
    //     $a= $this->request->getPost('username');
    //     $b= $this->request->getPost('password');
    //     $c= $this->request->getPost('level');
        
    //     $simpan=array(
    //         'username'=>$a,
    //         'password'=>$b,
    //         'level'=>$c
           
    //     );
    //     $model = new M_model();
    //     $model->simpan('user',$simpan);
    //     return redirect()->to('/home/user');
    // }

    public function hapus_user($id)
    {
        $model = new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('user',$where);
        return redirect()->to('/home/user');
    }

///////////////===============================PENDATAAN BARANG============================///////////////
    public function pendataan_brg()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('pendataan_brg');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('pendataan_brg');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_pendataan_brg()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('pendataan_brg');
        echo view('header');
        echo view('menu');
        echo view('tambah_pendataan_brg',$kui);
        echo view('footer');
    }

    public function aksi_tambah_pendataan_brg()
    {
        $a= $this->request->getPost('jenis_data');
        $b= $this->request->getPost('tanggal');
       

        $simpan=array(
            'jenis_data'=>$a,
            'tanggal'=>$b         

        );
        $model = new M_model();
        $model->simpan('pendataan_brg',$simpan);
        return redirect()->to('/home/pendataan_brg');
    }

    public function edit_pendataan_brg($id)
    {
        $model = new M_model();
        $where=array('id_data'=>$id);
        $kui['ferdi']=$model->getRow('pendataan_brg',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('edit_pendataan_brg',$kui);
        echo view('footer');
    }

    public function aksi_edit_pendataan_brg()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $jenis_data= $this->request->getPost('jenis_data');
         $tanggal= $this->request->getPost('tanggal');
         

         $where=array('id_data'=>$id);
         $simpan=array(
            'jenis_data'=>$jenis_data,
            'tanggal'=>$tanggal
    
         );

         $model = new M_model();
         $model->edit('pendataan_brg', $simpan, $where);
         return redirect()->to('/home/pendataan_brg');
    }

    public function hapus_pendataan_brg($id)
    {
        $model = new M_model();
        $where=array('id_data'=>$id);
        $model->hapus('pendataan_brg',$where);
        return redirect()->to('/home/pendataan_brg');
    }

///////////////===============================REGISTRASI USER============================///////////////
    public function registrasi_user()
    {
// if(session()->get('level')== 1) {

        $model = new M_model();
        $kui['ferdi'] = $model->tampil('registrasi_user');

        // $id = session()->get('id');
        // $where = array('id' => $id);

        echo view('header', $kui);
        echo view('menu');
        echo view('registrasi_user');
        echo view('footer');
// }else{
//     return redirect()->to('/home/dashboard');
// }
    }

    public function tambah_registrasi_user()
    {
        $model = new M_model();
        $kui['ferdi']=$model->tampil('registrasi_user');
        echo view('header');
        echo view('menu');
        echo view('tambah_registrasi_user',$kui);
        echo view('footer');
    }

    public function aksi_tambah_registrasi_user()
    {
        $a= $this->request->getPost('nama');
        $b= $this->request->getPost('harga');
        $c= $this->request->getPost('jumlah');

        $simpan=array(
            'nama'=>$a,
            'harga'=>$b,
            'jumlah'=>$c            

        );
        $model = new M_model();
        $model->simpan('registrasi_user',$simpan);
        return redirect()->to('/home/registrasi_user');
    }

    public function edit_registrasi_user($id)
    {
        $model = new M_model();
        $where=array('id_registrasi_user'=>$id);
        $kui['ferdi']=$model->getRow('registrasi_user',$where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header');
        echo view('menu');
        echo view('edit_registrasi_user',$kui);
        echo view('footer');
    }

    public function aksi_edit_registrasi_user()
    {
         $model=new M_model();
         $id= $this->request->getPost('id');
         $nama= $this->request->getPost('nama');
         $harga= $this->request->getPost('harga');
         $jumlah= $this->request->getPost('jumlah');

         $where=array('id_registrasi_user'=>$id);
         $simpan=array(
            'nama'=>$nama,
            'harga'=>$harga,
            'jumlah'=>$jumlah

         );

         $model = new M_model();
         $model->edit('registrasi_user', $simpan, $where);
         return redirect()->to('/home/registrasi_user');
    }

    public function hapus_registrasi_user($id)
    {
        $model = new M_model();
        $where=array('id_registrasi_user'=>$id);
        $model->hapus('registrasi_user',$where);
        return redirect()->to('/home/registrasi_user');
    }



///////////////===============================RESEP============================///////////////
//     public function resep()
//     {
//         // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3 || session()->get('level')== 4) { 

//         $model = new M_model();
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->ultra('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3);

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));
//         $kui['user']=$model->getRow('user',$where);

//         echo view('header', $kui);
//         echo view('menu');
//         echo view('v_resep');
//         echo view('footer');
//     // }else{
//     //     return redirect()->to('/home/dashboard');
//     // }
//     }

//     public function tambah_resep()
//     {
//         // if(session()->get('level')== 1 || session()->get('level')== 2 || session()->get('level')== 3) {

//         $model=new M_model();
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->ultra('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3);

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));    
//         $kui['user']=$model->getRow('user',$where);

//         $where=array('id_user' => session()->get('id'));
//         // $kui['user']=$model->getRow('user',$where);

//         $kui['duar']=$model->tampil('dokter'); 
//         $kui['a']=$model->tampil('pasien'); 
//         $kui['b']=$model->tampil('poliklinik'); 


//         echo view('header',$kui);
//         echo view('menu');
//         echo view('v_tambah_resep');
//         echo view('footer');

//     //     }else{
//     //     return redirect()->to('/home/dashboard');
//     // }
//     }

//     public function aksi_tambah_resep()
//     {
//         $model = new M_model();
//         $id_dokter = $this->request->getPost('id_dokter');
//         $id_pasien = $this->request->getPost('id_pasien');
//         $id_poliklinik = $this->request->getPost('id_poliklinik');
//         $tgl_resep = $this->request->getPost('tgl_resep');
//         $total_harga = $this->request->getPost('total_harga');
//         $bayar = $this->request->getPost('bayar');
//         $kembali = $this->request->getPost('kembali');

//         $data = array(
//             'id_dokter' => $id_dokter,
//             'id_pasien' => $id_pasien,
//             'id_poliklinik' => $id_poliklinik,
//             'tgl_resep' => $tgl_resep,
//             'total_harga' => $total_harga,
//             'bayar' => $bayar,
//             'kembali' => $kembali
//         );
//     // print_r($data);
//         // Simpan data ke dalam tabel 'resep' menggunakan model
//         $model->simpan('resep', $data);

//         // // Redirect ke halaman '/home/resep'
//         return redirect()->to('/home/resep');
//     }

//     public function edit_resep($id)
//     {
//         // if(session()->get('level')== 4) {

//         $model=new M_model();
//         $where2=array('id_resep'=>$id);
//         $on='resep.id_dokter=dokter.id_dokter';
//         $on2='resep.id_pasien=pasien.id_pasien';
//         $on3='resep.id_poliklinik=poliklinik.id_poliklinik';
//         $kui['ferdi'] = $model->edit_resep('resep', 'dokter', 'pasien', 'poliklinik', $on, $on2, $on3, $where2);
//         $kui['duar']=$model->tampil('dokter'); 
//         $kui['a']=$model->tampil('pasien'); 
//         $kui['b']=$model->tampil('poliklinik'); 

//         $id=session()->get('id');
//         $where=array('id_user'=>$id);
//         $where=array('id_user' => session()->get('id'));
//         $kui['user']=$model->getwhere('user',$where);

//         echo view('header',$kui);
//         echo view('menu');
//         echo view('v_edit_resep');
//         echo view('footer');

// //     }else{
// //         return redirect()->to('/home/dashboard');
// //     }
//     }

//     public function aksi_edit_resep()
//     {
//         $model=new M_model();
//         $id=$this->request->getPost('id');
//         $a=$this->request->getPost('id_pasien');
//         $b=$this->request->getPost('id_dokter');
//         $c=$this->request->getPost('id_poliklinik');
//         $tgl_resep=$this->request->getPost('tgl_resep');        
//         $total_harga=$this->request->getPost('total_harga');
//         $bayar=$this->request->getPost('bayar');
//         $kembali=$this->request->getPost('kembali');

//         $data=array(
//             'id_pasien'=>$a,
//             'id_dokter'=>$b,
//             'id_poliklinik'=>$c,
//             'tgl_resep'=>$tgl_resep,
//             'total_harga'=>$total_harga,
//             'bayar'=>$bayar,
//             'kembali'=>$kembali,            

//         );
//         // print_r($data);
//         $where=array('id_resep'=>$id);
//         $model->edit('resep',$data,$where);
//         return redirect()->to('/home/resep');
//     }

//     public function hapus_resep($id)
//     {
//         $model = new M_model();
//         $where=array('id_resep'=>$id);
//         $model->hapus('resep',$where);
//         return redirect()->to('/home/resep');
//     }

///////////////===============================LAPORAN============================///////////////
    public function laporan_penitip_barang()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        $kui['kunci']='view_penitip_barang';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function cari_penitip_barang()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        // $on = 'pembayaran.id_pasien = pasien.id_pasien';
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi'] = $model->filter('penitip_barang', $awal, $akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\pengajian\public\assets\KOP_PH.jpg');

        // $kui['foto'] = base64_encode($img);


        echo view('c_p',$kui);

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function pdf_penitip_barang()
    {
        // if(session()->get('level')== 2) {

        $model=new M_model();
        // $on = 'pembayaran.id_pasien = pasien.id_pasien';
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter('penitip_barang', $awal, $akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\pegawai\public\assets\KOP_PH.jpg');

        // $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_p',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));

    //     }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
    public function excel_penitip_barang()
    {
    // if(session()->get('level')== 2) {

    $model=new M_model();
    // $on = 'pembayaran.id_pasien = pasien.id_pasien';
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter('penitip_barang', $awal, $akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama')
    ->setCellValue('B1', 'Email')
    ->setCellValue('C1', 'Alamat')
    ->setCellValue('D1', 'No Hp');

    // ->setCellValue('C1', 'Jarak')
    // // ->setCellValue('D1', 'Due Date')
    // ->setCellValue('D1', 'Suhu')
    // ->setCellValue('E1', 'Tanggal Perjalanan');

    $column=2;

    foreach($data as $data){

        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->nama)
        ->setCellValue('B'. $column, $data->email)
        ->setCellValue('C'. $column, $data->alamat)
        ->setCellValue('D'. $column, $data->no_hp);

        // ->setCellValue('C'. $column, $data->jarak)
        // // ->setCellValue('D'. $column, $data->tgl_jatuh_tempo)
        // ->setCellValue('D'. $column, $data->suhu)
        // ->setCellValue('E'. $column, $data->tanggal_perjalanan);

        // $total += $data->jumlah_gaji;

        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'penitip_barang';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    // }else{
    //     return redirect()->to('/home/dashboard');
    // }
    }
}
