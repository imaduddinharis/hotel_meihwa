<?php
				
				$sql = mysql_query("SELECT * FROM tb_pemesanan ");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tbody style="text-align:center;">
						<tr bgcolor="#fff">
							<td >'.$no.'</td>
							<td >'.$data['nama_customer'].'</td>
							<td >'.$data['tipe_kamar'].'</td>
							<td >'.$data['from_date'].'</td>
							<td >'.$data['until_date'].'</td>
							<td >'.$data['status_pengunjung'].'</td>
							<td><a href="../../controller/checkin.php?id='.$data['id_transaksi'].'">Check In</a></td>
							<td><a href="../../controller/checkout.php?id='.$data['id_transaksi'].'">Check Out</a></td>
						</tr>
						</tbody>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="7" align="center">Tidak ada Permintaan!</td>
					</tr>
					';
				}
				?>