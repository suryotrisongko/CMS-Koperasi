<!-- // checked by Hatma 24 okt -->
<div class="clearfix"></div>
<div class="content_bottom">
    <!-- <div class="col-md-3 span_1">
        <ul class="spinner1">
            <i class="bubble1"> </i>
            <li class="spinner_head"><h3>Komentar</h3></li>
            <div class="clearfix"> </div>
        </ul>
        <div class="komentarkomen" style="background: #fff;
             border-radius: 0px 0px 3px 3px;		
             padding-top: 10px;		
             padding-bottom: 10px;		
             border: 1px solid #c0c0bf;		
             margin-top: 0px;		
             webkit-box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);		
             box-shadow: 0 0 200px rgba(255, 255, 255, 0.5), 0 1px 2px rgba(0, 0, 0, 0.3);">
            <form action= "<?php echo base_url(); ?>index.php/adminwebsite/addcomment" method="post">
                <input type="text" name="Nama anda" placeholder="Nama anda">
                <input type="text" name="Perihal komentar" placeholder="Perihal komentar">
                <input type="text" name="Masukkan komentar" placeholder="Masukkan komentar">
                <img src="http://localhost/CMS-Koperasi/index.php/captcha" width="70px" alt="captcha" style="margin-top:5px; margin-bottom:5px;">
                <p><input type="text" name="captcha" value="" placeholder="Masukkan captcha diatas" required></p>
                <div style="text-align: center">
                    -			<input type="submit" value="submit komentar" style="margin-top:5px;margin-bottom:5px">
                </div>
            </form> 

        </div>
        <div class="clearfix"> </div>
    </div> -->


    <div class="col-md-3 span_1">
        <ul class="spinner1">
            <i class="mail"> </i>
            <li class="spinner_head"><h3>Statistik Pengunjung</h3></li>
            <div class="clearfix"> </div>
        </ul>
        <div class="statistik">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td valign="middle" height="20"><li>Hari ini : </li></td><td valign="middle" height="20"><?php echo $visitor['day']; ?></td>
                </tr>
                <tr>
                    <td valign="middle" height="20"><li>Kemarin :</li></td><td valign="middle" height="20"><?php echo $visitor['yesterday']; ?></td>
                </tr>
                <tr>
                    <td valign="middle" height="20"><li>Bulan ini :</li></td><td valign="middle" height="20"><?php echo $visitor['mounth']; ?></td> 
                </tr>
                <tr>
                    <td valign="middle" height="20"><li>Tahun ini :</li></td><td valign="middle" height="20"><?php echo $visitor['year']; ?></td> 
                </tr>
                <tr>
                    <td valign="middle" height="20"><li>Total :</li></td><td valign="middle" height="20"><?php echo $visitor['sepanjang_waktu']; ?></td>
                </tr>
            </table>
        </div>
        <div class="clearfix"> </div>
    </div>
    
    <div class="col-md-3 span_1">
        <ul class="spinner1">
            <i class="mail"> </i>
            <li class="spinner_head"><h3>Lokasi Supermarket ITS</h3></li>
            <div class="clearfix"> </div>
        </ul>
        <div class="statistik">
            <img src="<?php echo base_url(); ?>asset/website/images/lokasi.jpg"  />
        </div>
        <div class="clearfix"> </div>
    </div>

    <div class="col-md-3 span_1">
        <ul class="spinner1">
            <i class="maul"> </i>
            <li class="spinner_head"><h3>Hubungi Kami</h3></li>
            <div class="clearfix"> </div>
        </ul>
        <div class="statistik">
            <p>KPRI-ITS, Badan Hukum Nomor 5089/BH/81 Tanggal 17 September 1981</p>
            <p>Jl. Arief Rahman Hakim, Keputih, Sukolilo Surabaya </p>
            <p>Tlp:(031) 5964 843</p>
            <p>Fax:(031) 5964 843</p>
        </div>
        <div class="clearfix"> </div>

    </div>
</div>