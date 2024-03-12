<?php
$Barang = array(
  array("Nama Barang" => "Mie Instan", "Harga" => 3000),
  array("Nama Barang" => "Sabun Mandi", "Harga" => 3500),
  array("Nama Barang" => "Shampoo", "Harga" => 1000),
  array("Nama Barang" => "Sandal Jepit", "Harga" => 11000),
  array("Nama Barang" => "Roti", "Harga" => 12000),
  array("Nama Barang" => "Buku Tulis", "Harga" => 5500),
  array("Nama Barang" => "Susu Kotak", "Harga" => 6000),
  array("Nama Barang" => "Minyak Goreng", "Harga" => 13000),
  array("Nama Barang" => "Ice Cream", "Harga" => 11000),
  array("Nama Barang" => "Baterai", "Harga" => 16000)
);
$tanggal = date("d M Y");
$nama = array(
  array("Customer" => "Ucup"),
  array("Customer" => "Supri"),
  array("Customer" => "Jono"),
  array("Customer" => "Waluyo"),
  array("Customer" => "Takuyo"),
);



    $tanggal= @$_POST["tgl"];
    $namcus = @$_POST["namcus"];
    $noId = @$_POST["kode"];
    $jumlah1 = @$_POST["jumlah1"];
    $jumlah2 = @$_POST["jumlah2"];
    $jumlah3 = @$_POST["jumlah3"];
    $Barang1 = @$_POST["barang1"];
    $Barang2 = @$_POST["barang2"];
    $Barang3 = @$_POST["barang3"];
    $deluxe = 850000;
    $superior = 500000;
    $diskon = null;
    $total = null;
    error_reporting(0);
   
        //Output program dan Pemanggilan Array
   
        ?>
<?php /*       
<table class="table table-success table-striped">
<thead>
    <tr>
      <th scope="col">No.</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Qty</th>
      <th scope="col">Harga Satuan</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     foreach ($Barang as $x){
 $total = $x["Harga"]* $x["Jumlah"];
 $jumlahtotal += $total; 
    echo "<tr>";
    echo "<th>  </th>";
        echo "<td> {$x["Nama Barang"]} </td>";
        echo "<td>". 'Rp '.number_format($x["Harga"] , 0 , '' , '.') . "</td>";
        echo "<td> {$x["Jumlah"]} </td>";
        echo "<td>".'Rp '.number_format($total , 0 , '' , '.') ."</td>";
echo "</tr>";
     }
           
      echo "<th scope='col'></th>";
      echo "<th scope='col'></th>";
      echo "<th scope='col'></th>";
      echo "<th scope='col'>Total</th>";
      echo "<th scope='col'></th>";
      echo "<th scope='col'>".'Rp '. number_format($jumlahtotal,0,'','.')."</th>";     
      ?>
  </tbody>
</table>
*/
?><table class="table table-success table-striped">
            <tr>
              <td><?php echo '&nbsp Kode Transaksi';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$noId;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Tanggal Transaksi';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$tanggal;?></td>
            </tr>
          
            <tr>
              
              <td><?php echo '&nbsp Customer';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$namcus;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Nama Barang 1';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$Barang1;?></td>
            </tr>
            <tr>
              <td><?php echo '&nbsp Nama Barang 2';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$Barang2;?></td>
            </tr>
            <tr>
              <td><?php echo '&nbsp Nama Barang 3';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$Barang3;?></td>
            </tr>
      
          
            <tr>
              <td><?php echo '&nbsp Jumlah Barang1';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jumlah1;?></td>
            </tr>
            <tr>
              <td><?php echo '&nbsp Jumlah Barang2';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jumlah2;?></td>
            </tr>
            <tr>
              <td><?php echo '&nbsp Jumlah Barang3';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td><?php echo '&nbsp'.$jumlah3;?></td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Diskon';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php
                //Menentukan Diskon 
                if($Barang1){
                  if($jumlah == ""){
                      echo "jumlah belum diisi";
                  }elseif($Barang1 == "barang1"){
                    $hasil = $Barang1 * $jumlah ;
                    $hasil;
                  }
                  if($hasil > 2000000){
                    $diskon = (20/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbspPotongan diskon 20%";
                  }elseif($hasil > 1500000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbspPotongan diskon 10%";
                  }else{
                    echo "&nbspAnda tidak berhak mendapatkan diskon";
                    }
                }?>
              </td>
            </tr>

            <tr>
              <td><?php echo '&nbsp Total Bayar';?></td>
              <td><?php echo '&nbsp : ';?></td>
              <td>
                <?php 
                //Menentukan Total Biaya
                if($Barang1){
                  if($jumlah == ""){
                      echo "Jumlah belum diisi";
                  }

                  if($hasil > 2000000){
                    $diskon = (20/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }elseif($hasil > 1500000){
                    $diskon = (10/100)*$hasil;
                    $total = $hasil - $diskon;
                    echo "&nbsp".$total;
                  }else{
                    echo "&nbsp".$hasil;
                  }
                }?>
              </td>            
            </tr>
          </table>
            

        
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form method="post" name="frmpost"id="form1">
        <form>
            <div class="row">
            <div class="col-lg-2"> Kode Transaksi</div><?=":" ?>
                <div class="col-lg-2"><input name="kode" type="text" size="29" maxlength="">
                </div>
            </div>
            <div class="row">
            <div class="col-lg-2" name="tgl">Tanggal Transaksi </div> <?=":" ?>
            <div class="col-lg-4"><input size="29" disabled name="tgl" type="text" value="<?=$tanggal?>"></div>
            </div>
            <div class="row">
            <div class="col-lg-2"> Customer </div> <?=":" ?>
              <div class="col-lg-6"><select name="namcus">
              <?php foreach($nama as $x):?>
                    <option selected><?=$x["Customer"]?></option> 
                    <?php endforeach; ?>
                    <option value="" selected>--Pilih Customer--</option>
</select></div>
</div>
            
<div class="row">
            <div class="col-lg-2">Barang 1 </div><?=":" ?>
            <div class="col-lg-6"><select name="barang1"> 
                <?php foreach($Barang as $x):?>
                    <option  Selected><?=$x["Nama Barang"] ?></option> 
                    <?php endforeach; ?>
                    <option value="" selected>--Pilih Barang--</option>
             <input type="text" name="jumlah1" value="">
                </select></div>
</div>
            <div class="row">
            <div class="col-lg-2">Barang 2 </div> <?=":" ?>
            <div class="col-lg-6"><select name="barang2"> 
                <?php foreach($Barang as $x):?>
                    <option  Selected><?=$x["Nama Barang"] ?></option> 
                    <?php endforeach; ?>
                    <option value="" selected>--Pilih Barang--</option>
             <input type="text" name="jumlah2" value="">
                </select></div>
            </div>
            <div class="row">
            <div class="col-lg-2">Barang 3 </div><?=":" ?>
            <div class="col-lg-6 "><select name="barang3"> 
                <?php foreach($Barang as $x):?>
                    <option  Selected><?=$x["Nama Barang"] ?></option> 
                    <?php endforeach; ?>
                    <option value="" selected>--Pilih Barang--</option>
             <input type="text" name="jumlah3" value="">
                </select></div>
            <div class="row">
            <div class="col-lg-2"> Punya Kartu Member? </div>
            <div class="col-lg-6 mx-3"><input type="radio" name="rd" value="l"> Ya
               <input type="radio" name="rd" value="p"> Tidak
</div>
            </div>
            <div class="row">
            <div class="col-lg-2">Uang Pembayaran</div>
            <div class="col-lg-2 "> <input name="Pembayaran" type="text" size="" maxlength=""></div>
            </div>
            <div>
            <input type="submit" name="btnOk" value="Simpan" /> <input type="reset" name="btnCancel" value="Cancel" />
            </div>
        </form> 
    </form>
    <?php
    tampil();
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>