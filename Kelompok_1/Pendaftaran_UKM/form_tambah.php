<div class="row"> 
    <div class="col-md-12"> 
        <div class="alert alert-info" role="alert"> 
            <i class="fas fa-edit"></i> Input Data Mahasiswa 
        </div>

        <div class="card"> 
            <div class="card-body"> 
                 <form class="needs-validation" action="proses_simpan.php" method="post" enctype="multipart/form-data" novalidate> 
                    <div class="row"> 
                        <div class="col"> 


                            <div class="form-group col-md-12"> 
                                <label>NIM</label> 
                                <input type="text" class="form-control" name="nim" maxlength="10" onKeyPress="return autocomplete="off" required> 
                                <div class="invalid-feedback">NIM tidak boleh kosong.</div> 
                            </div> 	
    
                            <div class="form-group col-md-12"> 
                                <label>Nama Lengkap</label> 
                                <input type="text" class="form-control" name="nama_lengkap" autocomplete="off" required> 
                                <div class="invalid-feedback">Nama Lengkap tidak boleh kosong.</div> 
                            </div> 

                            <div class="form-group col-md-12"> 
                                <label class="mb-3">Jenis Kelamin</label> 
                                <div class="custom-control custom-radio"> 
                                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="jenis_kelamin" value="Laki-laki" required> 
                                    <label class="custom-control-label" for="customControlValidation2">Laki-laki</label> 
                                </div> 
                                <div class="custom-control custom-radio mb-4"> 
                                    <input type="radio" class="custom-control-input" id="customControlValidation3" name="jenis_kelamin" value="Perempuan" required> 
                                    <label class="custom-control-label" for="customControlValidation3">Perempuan</label> 
                                    <div class="invalid-feedback">Pilih salah satu jenis kelamin.</div> 
                                </div>  
                            </div>
                            <div class="form-group col-md-12"> 
                                <label>Program Studi</label> 
                                <select class="form-control" name="program_studi" autocomplete="off" required>
                                    <option value=""></option> 
                                    <option value="Teknik Informatika">Teknik Informatika</option> 
                                    <option value="Sistem Informasi">Sistem Informasi</option>
                                    <option value="Manajemen Informatika">Manajemen Informatika</option> 
                                </select> 
                                <div class="invalid-feedback">Program Studi tidak boleh kosong.</div> 
                            </div> 
                        </div> 
                        
                        <div class="col">
                            <div class="form-group col-md-12"> 
                                <label>Alamat</label> 
                                <textarea class="form-control" rows="2" name="alamat" autocomplete="off" required></textarea>
                                <div class="invalid-feedback">Alamat tidak boleh kosong.</div> 
                            </div> 
                            
                            <div class="form-group col-md-12"> 
                                <label>No. HP</label> 
                                <input type="text" class="form-control" name="no_hp" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" autocomplete="off" required> 
                                <div class="invalid-feedback">No. HP tidak boleh kosong.</div> 
                            </div> 

                            <div class="form-group col-md-12">
                                <label>Pilih UKM</label>
                                <select class="form-control" name="pilih_ukm" autocomplete="off" required>
                                    <option value=""></option> 
                                    <option value="DJ">DJ</option> 
                                    <option value="Kajis">Kajis</option>
                                    <option value="Paduan Suara">Paduan Suara</option> 
                                    <option value="Photography">Photograpy</option>
                                    <option value="Radio">Radio</option>
                                    <option value="SIM C">SIM C</option>
                                </select> 
                                <div class="invalid-feedback">Pilih UKM tidak boleh kosong.</div> 
                            </div>
                        </div> 
                        
                    </div> 
                    
                    <div class="my-md-4 pt-md-1 border-top"> </div> 
                    
                    <div class="form-group col-md-12 right"> 
                        <input type="submit" class="btn btn-info btn-submit mr-2" name="simpan" value="Simpan"> 
                        <a href="index.php" class="btn btn-secondary btn-reset"> Batal </a> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
</div>