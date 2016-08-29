<?php
				
				$sql = mysql_query("SELECT * FROM lh ");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tbody style="text-align:center;">
						<tr bgcolor="#fff">
							<td >'.$no.'</td>
							<td >'.$data['id_pemesanan'].'</td>
							<td >'.$data['id_customer'].'</td>
							<td >'.$data['type_identitas'].'</td>
							<td >'.$data['nama_customer'].'</td>
							<td >'.$data['tanggal_pemesanan'].'</td>
							<td >'.$data['from_date'].'</td>
							<td >'.$data['until_date'].'</td>
							<td >'.$data['total_harga'].'</td>
							<td >'.$data['status_pembayaran'].'</td>
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