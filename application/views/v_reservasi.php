<section>
    <h1><?php echo $judul ?></h1>
    <center>  
        <form action="<?= base_url('datasiswa/cetak'); ?>" method="post"> 
            <table> 
                <tr align="left" > 
                    <th >NIK</th> 
                    <th>:</th> 
                    <td> 
                        <input type="text" name="nama" id="nama" placeholder="Input Nama Siswa" size="29"> 
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Nama Lengkap</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="nis" id="nis" placeholder="Input NIS" size="29"> 
                            
                    </td> 
                </tr>
                <tr align="left">
                <th>Jenis Kelamin</th> 
                    <th>:</th> 
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan 
                </tr>  
                <tr align="left"> 
                    <th>Alamat</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="kelas" id="kelas" placeholder="Input Kelas" size="29"> 
                           
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tipe</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="tanggal_lahir" id="tanggal_lahir"placeholder="Input Tanggal Lahir" size="29"> 
                            
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Tanggal checkin</th> 
                    <th>:</th> 
                    <td>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Input Tempat Lahir" size="29"> 
                            
                    </td> 
                </tr> 
                <tr align="left"> 
                    <th>Lama inap</th> 
                    <th>:</th> 
                    <td>
                    <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Input Tempat Lahir" size="29"> 
                    </td> 
                </tr>
                
                <tr> 
                    <td colspan="3" align="center"><input type="submit" value="Simpan"> 
                    </td> 
                </tr> 
            </table> 
        </form> 
    </center> 
</section>