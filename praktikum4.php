<?php
    include_once 'header.php';
    include_once 'sidebar.php';
?>
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Praktikum 4</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Praktikum 4</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Lingkaran</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <?php
              require_once "class_lingkaran.php";
              echo "NILAI PHI " . Lingkaran::PHI;


              $lingkar1 = new Lingkaran( 10 );
              $lingkar2 = new Lingkaran( 4 );

              echo "<br/>Luas Lingkaran I ".$lingkar1->getLuas();
              echo "<br>Luas Lingkaran II ".$lingkar2->getLuas();
              echo "Keliling Lingkaran I ".$lingkar1->getKeliling();
              echo "<br>Keliling Lingkaran II ".$lingkar2->getKeliling();
              ?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Praktikum 4
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
           
           
              <!-- /.card-body -->
              <div class="card-footer">
                Praktikum 4 
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
          

              </div>
              <!-- /.card-body -->
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Penilaian Mahasiswa</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="container mt-5 text-center">
          <h2> Form Penilaian Mahasiswa</h2>
          <hr>
          </div>

          <form  method="POST" action="" class="mt-5 container col-8">
            <div class="form-group row">
              <label for="nim" class="col-4 col-form-label">NIM</label> 
              <div class="col-8">
                <input id="nim" name="nim" placeholder="Isi Dengan Nim Anda" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                  <option value="JK">Jaringan Komputer</option>
                  <option value="SO">Sistem Operasi</option>
                  <option value="BD">Big Data</option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <label for="nilai" class="col-4 col-form-label">Nilai</label> 
              <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Isi Dengan Nilai Anda" type="text" class="form-control">
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
              <button name="proses" type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>


          <div class="row">
            <hr>
            </div>
            <div class="row ms-3">
          <?php
          require_once "class_nilaimahasiswa.php";
            if (isset($_POST['proses'])) {
            $proses = $_POST['proses'];
            $nim = $_POST['nim'];
            $matkul = $_POST['matkul'];
            $nilai = $_POST['nilai'];
            $nilai_mahasiswa = new NilaiMahasiswa($matkul, $nilai, $nim);
              echo "NIM : " . $nilai_mahasiswa->nim;
              echo "<br>Nama Mata Kuliah : " . $nilai_mahasiswa->matakuliah;
              echo "<br>Nilai : " . $nilai_mahasiswa->nilai;

              $hasil_ujian = $nilai_mahasiswa->grade($nilai);
              echo "<br>Hasil Ujian : $hasil_ujian <br>";

              $hasil_grade = $nilai_mahasiswa->hasil($nilai);
              echo "Grade : $hasil_grade";
              }
          ?>
              </div>
              <div class="row">
              <?php
              if (isset($_POST['proses'])) {
              echo '<hr class="mt-5 ms-0";>';
              }
              ?>
              </div>
              </div>
              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
    include_once 'footer.php';
?>