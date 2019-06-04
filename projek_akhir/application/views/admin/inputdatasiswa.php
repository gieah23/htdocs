<head>
<title>Entry Siswa</title>
</head>
    <table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
      <tr>
        <td height="40" align="center" bgcolor="#009999"><strong><font color="#FFFFFF">FORM INPUT DATA SISWA </font></strong></td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
            <tr>
              <td width="113">NIS</td>
              <td width="11">:</td>
              <td width="237"><input name="nis" type="text" id="nis" size="12" maxlength="12"></td>
            </tr>
            <tr>
              <td>Nama</td>
              <td>:</td>
              <td><input name="nama" type="text" id="nama" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tempat Lahir</td>
              <td>:</td>
              <td><input name="tempat_lahir" type="text" id="tempat_lahir" size="30" maxlength="30"></td>
            </tr>
            <tr>
              <td>Tanggal Lahir</td>
              <td>:</td>
              <td><select name="tgl" size="1" id="tgl">
                  <?
		     for ($i=1;$i<=31;$i++)
			 {
			   echo "<option value=".$i.">".$i."</option>";
			 }
		  ?>
                </select>
                <select name="bln" size="1" id="bln">
                  <?
		     $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		     for ($i=1;$i<=12;$i++)
			 {
			   echo "<option value=".$i.">".$bulan[$i]."</option>";
			 }
		  ?>
                </select>
                <select name="thn" size="1" id="thn">
                  <?
		     for ($i=1985;$i<=2000;$i++)
			 {
			   echo "<option value=".$i.">".$i."</option>";
			 }
		  ?>
              </select></td>
            </tr>
            <tr>
              <td>Alamat</td>
              <td>:</td>
              <td><textarea name="alamat" cols="30" rows="5" id="alamat"></textarea></td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td><input name="jenis_kelamin" type="radio" value="L" checked>
                Laki-laki
                <input name="jenis_kelamin" type="radio" value="P">
                Perempuan </td>
            </tr>
            <tr>
              <td>Photo</td>
              <td>:</td>
              <td><input type="file" name="photo" id="photo"></td>
            </tr>
            <tr>
              <td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="OK">
                <input name="fulang" type="reset" id="fulang" value="Ulangi">
                <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()"></td>
            </tr>
        </table></td>
      </tr>
    </table>
  </form>
