<?php echo $data['header'];?>
		<ul class="breadcrumb">
			<li>
				<a href="/">Home</a> <span class="divider"> </span>
			</li>
			<li class="active">
				<a>Barang Detail</a></span>
			</li>
		</ul>
		<div class="col-md-12">
			<!-- <form action="?url=kemasan/masukSave" method="POST"> -->
			<div class="panel-group" id="accordion">
			    <div class="panel panel-default" id="panel1">
			        <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-target="#collapse1" href="#collapse1">
								Header Data
							</a>
						</h4>
			        </div>
			        <div id="collapse1" class="panel-body panel-collapse collapse in">
				        <div class="col-md-6">
							<table class="">
								<tbody>
									<tr>
										<td width="150px">KD_DOK</td>
										<td>
											<input type="text" name="kd_dok" class="form-control" value="<?php echo $data['kd_dok'];?>" disabled>
										</td>
									</tr>
									<tr>
										<td>KD_TPS</td>
										<td>
											<input type="text" name="kd_tps" class="form-control" value="<?php echo $data['kd_tps'];?>" disabled>
										</td>
									</tr>
									<tr>
										<td>NM_ANGKUT</td>
										<td>
											<input type="text" name="nm_angkut" class="form-control" value="<?php echo $data['nm_angkut'];?>" disabled>
										</td>
									</tr>
									<tr>
										<td>NO_VOY_FLIGHT</td>
										<td>
											<input type="text" name="no_voy_flight" class="form-control" value="<?php echo $data['no_voy_flight'];?>" disabled>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<table class="">
								<tbody>
									<tr>
										<td width="150px">CALL_SIGN</td>
										<td>
											<input type="text" name="call_sign" class="form-control" value="<?php echo $data['call_sign'];?>" disabled>
										</td>
									</tr>
									<tr>
										<td>TGL_TIBA</td>
										<td>
											<input type="date" name="tgl_tiba" class="form-control" value="<?php echo $data['tgl_tiba'];?>" disabled>
										</td>
									</tr>
									<tr>
										<td>KD_GUDANG</td>
										<td>
											<input type="text" name="kd_gudang" class="form-control" value="<?php echo $data['kd_gudang'];?>" disabled>
										</td>
									</tr>
									<tr>
										<td>REF_NUMBER</td>
										<td>
											<input type="text" name="ref_number" class="form-control" value="<?php echo $data['ref_number'];?>" disabled>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
			        </div>
			    </div>
			    <div class="panel panel-default" id="panel2">
			        <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-target="#collapse2" href="#collapse2" onfocus="this.click()">
								Detail Data Masuk
							</a>
						</h4>
			        </div>
			        <div id="collapse2" class="panel-body panel-collapse collapse in">
							<div class="col-md-12">
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>NO_BL_AWB</th>
											<th>TGL_BL_AWB</th>
											<th>NO_MASTER_BL_AWB</th>
											<th>TGL_MASTER_BL_AWB</th>
											<th>ID_CONSIGNEE</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" type="text" name="no_bl_awb" value="<?php echo $data['no_bl_awb'];?>" disabled></td>
											<td><input class="form-control" type="date" name="tgl_bl_awb" value="<?php echo $data['tgl_bl_awb'];?>" disabled></td>
											<td><input class="form-control " type="text" name="no_master_bl_awb" value="<?php echo $data['no_master_bl_awb'];?>" disabled></td>
											<td><input class="form-control" type="date" name="tgl_master_bl_awb" value="<?php echo $data['tgl_master_bl_awb'];?>" disabled></td>
											<td><input class="form-control" type="text" name="id_consignee" value="<?php echo $data['id_consignee'];?>" disabled></td>
										</tr>
									</tbody>
								</table>
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>CONSIGNEE</th>
											<th>BRUTO</th>
											<th>NO_BC11</th>
											<th>TGL_BC11</th>
											<th>NO_POS_BC11</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" type="text" name="consignee" value="<?php echo $data['consignee'];?>" disabled></td>
											<td><input class="form-control" type="text" name="bruto" value="<?php echo $data['bruto'];?>" disabled></td>
											<td><input class="form-control" type="text" name="no_bc11" value="<?php echo $data['no_bc11'];?>" disabled></td>
											<td><input class="form-control" type="date" name="tgl_bc11" value="<?php echo $data['tgl_bc11'];?>" disabled></td>
											<td><input class="form-control" type="text" name="no_pos_bc11" value="<?php echo $data['no_pos_bc11'];?>" disabled></td>
										</tr>
									</tbody>
								</table>
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>CONT_ASAL</th>
											<th>SERI_KEMAS</th>
											<th>KD_KEMAS</th>
											<th>JML_KEMAS</th>
											<th>KD_TIMBUN</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" type="text" name="cont_asal" value="<?php echo $data['cont_asal'];?>" disabled></td>
											<td><input class="form-control" type="text" name="seri_kemas" value="<?php echo $data['seri_kemas'];?>" disabled></td>
											<td><input class="form-control" type="text" name="kd_kemas" value="<?php echo $data['kd_kemas'];?>" disabled></td>
											<td><input class="form-control" type="text" name="jml_kemas" value="<?php echo $data['jml_kemas'];?>" disabled></td>
											<td><input class="form-control" type="text" name="kd_timbun" value="<?php echo $data['kd_timbun'];?>" disabled></td>
										</tr>
									</tbody>
								</table>
							</div>
			        </div>
			    </div>
			    <div class="panel panel-default" id="panel3">
			        <div class="panel-heading">
						<h4 class="panel-title">
							<a data-toggle="collapse" data-target="#collapse3" href="#collapse3" class="collapsed" onfocus="this.click()">
								Detail Data Keluar
							</a>
						</h4>
			        </div>
			        <div id="collapse3" class="panel-body panel-collapse collapse">
							<div class="col-md-12">
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>KD_DOK_INOUT</th>
											<th>NO_DOK_INOUT</th>
											<th>TGL_DOK_INOUT</th>
											<th>WK_INOUT</th>
											<th>KD_SAR_ANGKUT_INOUT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" tabindex="1" type="text" name="kd_dok_inout" value="<?php echo $data['kd_dok_inout'];?>"></td>
											<td><input class="form-control" tabindex="2" type="date" name="no_dok_inout" value="<?php echo $data['no_dok_inout'];?>"></td>
											<td><input class="form-control calendar" tabindex="3" type="date" name="tgl_dok_inout" value="<?php echo $data['tgl_dok_inout'];?>"></td>
											<td><input class="form-control" tabindex="4" type="text" name="wk_inout" value="<?php echo $data['wk_inout'];?>"></td>
											<td><input class="form-control" tabindex="5" type="text" name="kd_sar_angkut_inout" value="<?php echo $data['kd_sar_angkut_inout'];?>"></td>
										</tr>
									</tbody>
								</table>
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>NO_POL</th>
											<th>PEL_MUAT</th>
											<th>PEL_TRANSIT</th>
											<th>PEL_BONGKAR</th>
											<th>GUDANG_TUJUAN</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" tabindex="6" type="text" name="no_pol" value="<?php echo $data['no_pol'];?>"></td>
											<td><input class="form-control" tabindex="7" type="text" name="pel_muat" value="<?php echo $data['pel_muat'];?>"></td>
											<td><input class="form-control" tabindex="8" type="text" name="pel_transit" value="<?php echo $data['pel_transit'];?>"></td>
											<td><input class="form-control" tabindex="9" type="text" name="pel_bongkar" value="<?php echo $data['pel_bongkar'];?>"></td>
											<td><input class="form-control" tabindex="10" type="text" name="gudang_tujuan" value="<?php echo $data['gudang_tujuan'];?>"></td>
										</tr>
									</tbody>
								</table>
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>KODE_KANTOR</th>
											<th>NO_DAFTAR_PABEAN</th>
											<th>TGL_DAFTAR_PABEAN</th>
											<th>NO_SEGEL_BC</th>
											<th>TGL_SEGEL_BC</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" tabindex="11" type="text" name="kode_kantor" value="<?php echo $data['kode_kantor'];?>"></td>
											<td><input class="form-control" tabindex="12" type="text" name="no_daftar_pabean" value="<?php echo $data['no_daftar_pabean'];?>"></td>
											<td><input class="form-control" tabindex="13" type="text" name="tgl_daftar_pabean" value="<?php echo $data['tgl_daftar_pabean'];?>"></td>
											<td><input class="form-control" tabindex="14" type="text" name="no_segel_bc" value="<?php echo $data['no_segel_bc'];?>"></td>
											<td><input class="form-control" tabindex="15" type="text" name="tgl_segel_bc" value="<?php echo $data['tgl_segel_bc'];?>"></td>
										</tr>
									</tbody>
								</table>
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>NO_IJIN_TPS</th>
											<th>TGL_IJIN_TPS</th>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th>&nbsp;</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" tabindex="16" type="text" name="no_ijin_tps" value="<?php echo $data['no_ijin_tps'];?>"></td>
											<td><input class="form-control" tabindex="17" type="text" name="tgl_ijin_tps" value="<?php echo $data['tgl_ijin_tps'];?>"></td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
											<td>&nbsp;</td>
										</tr>
									</tbody>
								</table>
							</div>
			        </div>
			    </div>
			</div>
							<center>
								<a href="?url=kemasan/daftar" class="btn btn-success">Cancel</a>
							</center>
			<!-- </form> -->
		</div>
	</div>
<?php echo $data['footer'];?>
		<?php if($data['error']&&$data['error']!=''){?>
		<script type="text/javascript">
			alert('<?php echo $data["error"];?>');
		</script>
		<?php }?>