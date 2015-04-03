
<br><br>  
 <div class="container">
     <h3>Tambahkan Prestasi</h3> 
     <div class="row">
        <form action="<?php echo base_url();?>index.php/prestasiadmin/do_register" method="post" class="col s12">
            <div class="input-field col s12">
                <label>Tanggal Post</label>
                <br>
                <input `id="Tanggal Post" type="date" class="datepicker" name="tgl">
            </div>
            <div class="input-field col s12">
              <input id="ID Prestasi" type="text" class="validate" name="idp">
              <label for="ID Prestasi">ID Prestasi</label>
            </div>
            <div class="input-field col s12">
              <input id="Nama Prestasi" type="text" class="validate" name="nama">
              <label for="Nama Prestasi">Nama Prestasi</label>
            </div>
            <div class="input-field col s12">
            <textarea id="deskripsi" class="materialize-textarea" name="deskripsi">      </textarea>
          <label for="deskripsi">Deskripsi</label>
        </div>            
            <div class="input-field col s12">
              <input id="Tahun" type="number" class="validate" name="tahun">
              <label for="Tahun">Tahun Prestasi</label>
            </div>
            <div class="input-field col s12">
              <input id="Bidang" type="text" class="validate" name="bidang">
              <label for="Bidang">Bidang</label>
            </div>
            <div class="col s12">
            <label>Tingkat</label>
            <select name="tingkat">
                <option value="" disabled selected>Choose your option</option>
                <option value="Internasional">Internasional</option>
                <option value="Nasional">Nasional</option>
                <option value="Region">Region</option>
                <option value="Universitas">Universitas</option>
                <option value="Fakultas">Fakultas</option>
                <option value="Jurusan">Jurusan</option>
            </select>
            </div>
            
            <div class="col s12">
            <label>Peringkat</label>
            <select name="peringkat">
                <option value="" disabled selected>Choose your option</option>
                <option value="Peringkat 1">Peringkat 1</option>
                <option value="Peringkat 2">Peringkat 2</option>
                <option value="Peringkat 3">Peringkat 3</option>
                <option value="Juara Harapan">Juara Harapan</option>
                <option value="Finalis">Finalis</option>
                <option value="Semifinalis">Semifinalis</option>
            </select>
            </div>            
                   
            <div class="input-field col s12">
            <label>Dokumentasi</label>
            <div class="file-field input-field">
              <input class="file-path validate" type="text"/>
              <div class="btn">
                <span align="left">File</span>
                <input name="dokumentasi" type="file" />
              </div>
            </div>              
            </div>
    <button class="btn waves-effect waves-light" type="submit" name="register">Submit
    <i class="mdi-content-send right"></i>
  </button>
          </div>
        </form>
      </div>
    </div>
<br><br><br>