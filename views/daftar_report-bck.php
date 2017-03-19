<?php echo $data['header'];?>
		<ul class="breadcrumb">
			<li>
				<a href="/">Home</a> <span class="divider"> </span>
			</li>
			<li class="active">
				<a>Daftar Report</a>
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
			<form action="?url=kemasan/daftar" method="POST">
				<table class="table">
					<thead>
						<tr>
							<th>KD_DOK</th>
							<th>KD_TPS</th>
							<th>NM_ANGKUT</th>
							<th>NO_VOY_FLIGHT</th>
							<th>CALL_SIGN</th>
							<th>TGL_TIBA</th>
							<th>KD_GUDANG</th>
							<th>REF_NUMBER</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$stype = '';
							$type = '';
							$state = '';
							foreach ($data['datas'] as $d) {
								switch($d->sent){
									case '0':{ $stype = "masuk";$type = 'Barang Masuk'; $btype = 'Masuk'; $state = ''; break;}
									case '1':{ $stype = "masukview";$type = 'Barang Masuk'; $btype = 'Masuk'; $state = 'disabled'; break; }
									case '2':{ $stype = "keluar";$type = 'Barang Keluar'; $btype = 'Keluar'; $state = ''; break;}
									case '3':{ $stype = "keluarview";$type = 'Barang Keluar'; $btype = 'Keluar'; $state = 'disabled'; break;}
									case '5':{ $stype = "komplit";$type = 'Barang Masuk'; $btype = 'Masuk'; $state = 'disabled'; break;}
								}
						?>
						<tr style="background-color: #7826ff;">
							<td><?php echo $d->kd_dok;?></td>
							<td><?php echo $d->kd_tps;?></td>
							<td><?php echo $d->nm_angkut;?></td>
							<td><?php echo $d->no_voy_flight;?></td>
							<td><?php echo $d->call_sign;?></td>
							<td><?php echo $d->tgl_tiba;?></td>
							<td><?php echo $d->kd_gudang;?></td>
							<td><?php echo $d->ref_number;?></td>
							<td>
								<?php if($d->sent=='0'||$d->sent=='2'){ ?>
								<a href="?url=kemasan/send/<?php echo $d->ref_number;?>/<?php echo $stype;?>" class="btn btn-sm btn-success <?php echo $state;?>" > SEND DOC : <?php echo $btype; ?></a>
								<?php }else{ ?>
								<div class="label label-danger"><?php echo $type;?></div>
								<?php	} ?>
								<a href="?url=kemasan/view/<?php echo $d->ref_number;?>/<?php echo $stype;?>" class="btn btn-sm btn-info" >View Detail</a>
								<?php if($d->sent=='1'){?>
								<a href="?url=kemasan/keluar/<?php echo $d->ref_number;?>" class="btn btn-sm btn-warning" >Keluar Barang</a>		
								<?php } ?>
							</td>
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</form>
		</div>
<?php echo $data['footer'];?>