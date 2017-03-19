<?php echo $data['header'];?>
		<ul class="breadcrumb">
			<li>
				<a href="/">Home</a> <span class="divider"> </span>
			</li>
			<li class="active">
				<a>Pencarian</a>
			</li>
		</ul>
		<div class="col-md-12">
			<?php if(isset($data['error'])){ ?>
			<div id="error-alert" class="alert alert-danger alert-dismissable fade in" role="alert">
			        <?php echo $data['error'];?>
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
			</div>
			<?php } ?>
			<?php if(isset($data['success'])){ ?>
			<div id="success-alert" class="alert alert-success alert-dismissable fade in" role="alert">
			        <?php echo $data['success'];?>
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
			</div>
			<?php } ?>
			<?php if(isset($_SESSION['message'])&&$_SESSION['message']!=''){ ?>
			<div id="success-alert" class="alert alert-success alert-dismissable fade in" role="alert">
			        <?php echo $_SESSION['message'];?>
			        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
			</div>
			<?php
					$_SESSION['message'] = ''; 
				} 
			?>
			<form action="?url=kemasan/cari" method="POST">
				<label for="s_refnum">Cari:</label>
				<input type="text" name="s_refnum" placeholder="Masukan Nomer Reference" />
				<button type="submit">SUBMIT</button>
			</form>
			<form action="?url=kemasan/daftar" method="POST">
				<table class="table">
					<thead>
						<tr>
							<th>&nbsp;</th>
							<th>REF_NUMBER</th>
							<th>KD_DOK</th>
							<th>KD_TPS</th>
							<th>NM_ANGKUT</th>
							<th>NO_VOY_FLIGHT</th>
							<th>CALL_SIGN</th>
							<th>TGL_TIBA</th>
							<th>KD_GUDANG</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$stype = '';
							$type = '';
							$state = '';
							foreach ($data['datas'] as $ref => $d) {
								// switch($d->sent){
								// 	case '0':{ $stype = "masuk";$type = 'Barang Masuk'; $btype = 'Masuk'; $state = ''; break;}
								// 	case '1':{ $stype = "masukview";$type = 'Barang Masuk'; $btype = 'Masuk'; $state = 'disabled'; break; }
								// 	case '2':{ $stype = "keluar";$type = 'Barang Keluar'; $btype = 'Keluar'; $state = ''; break;}
								// 	case '3':{ $stype = "keluarview";$type = 'Barang Keluar'; $btype = 'Keluar'; $state = 'disabled'; break;}
								// 	case '5':{ $stype = "komplit";$type = 'Barang Masuk'; $btype = 'Masuk'; $state = 'disabled'; break;}
								// }
								// echo $ref;
								foreach ($d as $k => $s) {
									if(isset($s['masuk'])){
										$t = $s['masuk'];
									
						?>
						<tr style="background-color: #78f6ff;">
							<td>DATA MASUK:</td>
							<td><?php echo $t->ref_number;?></td>
							<td><?php echo $t->kd_dok;?></td>
							<td><?php echo $t->kd_tps;?></td>
							<td><?php echo $t->nm_angkut;?></td>
							<td><?php echo $t->no_voy_flight;?></td>
							<td><?php echo $t->call_sign;?></td>
							<td><?php echo $t->tgl_tiba;?></td>
							<td><?php echo $t->kd_gudang;?></td>
						</tr>
						<?php
									}
									if(isset($s['keluar'])){
										$t = $s['keluar'];
									
						?>
						<tr style="background-color: #78baff;">
							<td>DATA KELUAR:</td>
							<td><?php echo $t->ref_number;?></td>
							<td><?php echo $t->kd_dok;?></td>
							<td><?php echo $t->kd_tps;?></td>
							<td><?php echo $t->nm_angkut;?></td>
							<td><?php echo $t->no_voy_flight;?></td>
							<td><?php echo $t->call_sign;?></td>
							<td><?php echo $t->tgl_tiba;?></td>
							<td><?php echo $t->kd_gudang;?></td>
						</tr>
						<?php
									}
								}
							}
						?>
					</tbody>
				</table>
			</form>
		</div>

<?php echo $data['footer'];?>