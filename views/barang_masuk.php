<?php echo $data['header'];?>
		<ul class="breadcrumb">
			<li>
				<a href="/">Home</a> <span class="divider"> </span>
			</li>
			<li class="active">
				<a>Barang Masuk</a></span>
			</li>
		</ul>
		<div class="col-md-12">
			<form action="?url=kemasan/masukSave" method="POST">
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
											<input type="hidden" name="kd_dok" value="5">
											<input tabindex="1" type="text" name="kd_dok" class="form-control" value="5" disabled="">
<!-- 											<select name="kd_dok" id="" tabindex="1" class="form-control">
												<option value="5">5 - Gate In Impor</option>
												<option value="6">6 - Gate Out Impor</option>
											</select> -->
										</td>
									</tr>
									<tr>
										<td>KD_TPS</td>
										<td>
											<label class="form-control" ><?php echo $data['kd_tps'];?></label>
<!-- 											<input tabindex="2" type="text" name="kd_tps" class="form-control" value="<?php //echo $data['kd_tps'];?>" disabled> -->
											<input type="hidden" name="kd_tps" value="<?php echo $data['kd_tps'];?>" />
										</td>
									</tr>
									<tr>
										<td>NM_ANGKUT</td>
										<td>
											<input tabindex="3" type="text" name="nm_angkut" class="form-control" maxlength="30" value="<?php echo $data['nm_angkut'];?>">
										</td>
									</tr>
									<tr>
										<td>NO_VOY_FLIGHT</td>
										<td>
											<input tabindex="4" type="text" name="no_voy_flight" class="form-control" maxlength="6" value="<?php echo $data['no_voy_flight'];?>">
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
											<label class="form-control"></label>
											<!-- <input tabindex="5" type="text" name="call_sign" class="form-control" value="<?php //echo $data['call_sign'];?>"> -->
											<input type="hidden" name="call_sign" value="<?php echo $data['call_sign'];?>" />
										</td>
									</tr>
									<tr>
										<td>TGL_TIBA</td>
										<td>
											<input tabindex="6" type="date" name="tgl_tiba" class="form-control calendar" value="<?php echo $data['tgl_tiba'];?>">
										</td>
									</tr>
									<tr>
										<td>KD_GUDANG</td>
										<td>
											<label class="form-control" >TA12</label>
											<!-- <input tabindex="7" type="text" name="kd_gudang" class="form-control" value="<?php //echo $data['kd_gudang'];?>"> -->
											<input type="hidden" name="kd_gudang" maxlength="6" value="TA12" />
										</td>
									</tr>
									<tr>
										<td>REF_NUMBER</td>
										<td>
											<input tabindex="8" type="text" name="ref_number" class="form-control" value="<?php echo $data['ref_number'];?>">
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
							<a tabindex="9" data-toggle="collapse" data-target="#collapse2" href="#collapse2" class="collapsed" onfocus="this.click()">
								Detail Data
							</a>
						</h4>
			        </div>
			        <div id="collapse2" class="panel-body panel-collapse collapse">
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
											<td><input class="form-control" tabindex="9" type="text" name="no_bl_awb" maxlength="16" value="<?php echo $data['no_bl_awb'];?>"></td>
											<td><input class="form-control calendar" tabindex="10" type="date" name="tgl_bl_awb" value="<?php echo $data['tgl_bl_awb'];?>"></td>
											<td><input class="form-control " tabindex="11" type="text" name="no_master_bl_awb" maxlength="16" value="<?php echo $data['no_master_bl_awb'];?>"></td>
											<td><input class="form-control calendar" tabindex="12" type="date" name="tgl_master_bl_awb" value="<?php echo $data['tgl_master_bl_awb'];?>"></td>
											<td><input class="form-control" tabindex="13" type="text" name="id_consignee" maxlength="16" value="<?php echo $data['id_consignee'];?>"></td>
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
											<td><input class="form-control" tabindex="14" type="text" name="consignee" maxlength="50" value="<?php echo $data['consignee'];?>"></td>
											<td><input class="form-control" tabindex="15" type="text" name="bruto" value="<?php echo $data['bruto'];?>"></td>
											<td><input class="form-control" tabindex="16" type="text" name="no_bc11" maxlength="10" value="<?php echo $data['no_bc11'];?>"></td>
											<td><input class="form-control calendar" tabindex="17" type="date" name="tgl_bc11" value="<?php echo $data['tgl_bc11'];?>"></td>
											<td><input class="form-control" tabindex="18" type="text" name="no_pos_bc11" maxlength="12" value="<?php echo $data['no_pos_bc11'];?>"></td>
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
											<td>
												<label class="form-control" ></label>
												<!-- <input class="form-control" tabindex="19" type="text" name="cont_asal" value="<?php //echo $data['cont_asal'];?>"> -->
												<input type="hidden" name="cont_asal" value="<?php echo $data['cont_asal'];?>">
											</td>
											<td>
												<label class="form-control" >1</label>
												<input type="hidden" name="seri_kemas" value="1">
												<!-- <input class="form-control" tabindex="20" type="text" name="seri_kemas" value="<?php //echo $data['seri_kemas'];?>"> -->
											</td>
											<td>
												<!-- <label class="form-control" >CT</label> -->
												<!-- <input type="hidden" name="kd_kemas" value="CT"> -->
												<input class="form-control" tabindex="21" type="text" name="kd_kemas" value="<?php //echo $data['kd_kemas'];?>">
											</td>
											<td><input class="form-control" tabindex="22" type="text" name="jml_kemas" value="<?php echo $data['jml_kemas'];?>"></td>
											<td>
												<!-- <label class="form-control" >TA12</label> -->
												<!-- <input type="hidden" name="kd_timbun" value="TA12"> -->
												<input class="form-control" tabindex="23" type="text" name="kd_timbun" value="<?php //echo $data['kd_timbun'];?>">
											</td>
										</tr>
									</tbody>
								</table>
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
											<td>
												<!-- <input class="form-control" tabindex="1" type="text" name="kd_dok_inout" value="<?php //echo $data['kd_dok_inout'];?>"> -->
												<select name="kd_dok_inout" id="" tabindex="1" class="form-control">
													<option value="1" <?php if($data['kd_dok_inout']=='1'){echo "selected";} ?> >1 - BC 2.0</option>
													<option value="2" <?php if($data['kd_dok_inout']=='2'){echo "selected";} ?> >2 - BC 2.3</option>
													<option value="3" <?php if($data['kd_dok_inout']=='3'){echo "selected";} ?> >3 - PLP</option>
													<option value="4" <?php if($data['kd_dok_inout']=='4'){echo "selected";} ?> >4 - BC 1.2</option>
													<option value="5" <?php if($data['kd_dok_inout']=='5'){echo "selected";} ?> >5 - </option>
													<option value="6" <?php if($data['kd_dok_inout']=='6'){echo "selected";} ?> >6 - </option>
													<option value="7" <?php if($data['kd_dok_inout']=='7'){echo "selected";} ?> >7 - </option>
													<option value="8" <?php if($data['kd_dok_inout']=='8'){echo "selected";} ?> >8 - </option>
													<option value="9" <?php if($data['kd_dok_inout']=='9'){echo "selected";} ?> >9 - </option>
													<option value="10" <?php if($data['kd_dok_inout']=='10'){echo "selected";} ?> >10 - </option>
												</select>
											</td>
											<td><input class="form-control" tabindex="2" type="text" name="no_dok_inout" maxlength="10" value="<?php echo $data['no_dok_inout'];?>"></td>
											<td><input class="form-control calendar" tabindex="3" type="date" name="tgl_dok_inout" value="<?php echo $data['tgl_dok_inout'];?>"></td>
											<td>
												<span class="input-group date" id="datetimepicker1" >
													<input class="form-control" tabindex="4" type="text" name="wk_inout" value="<?php echo $data['wk_inout'];?>">
								                    <!-- <span class="input-group-addon"> -->
                        								<!-- <span class="glyphicon glyphicon-calendar"></span> -->
                    								</span>
												</span>
											</td>
											<td>
												<label class="form-control">1</label>
												<input type="hidden" name="kd_sar_angkut_inout" value="1">
												<!-- <input class="form-control" tabindex="5" type="text" name="kd_sar_angkut_inout" value="<?php echo $data['kd_sar_angkut_inout'];?>"> -->
											</td>
										</tr>
									</tbody>
								</table>
								<table class="table table-responsive table-condensed">
									<thead>
										<tr>
											<th>NO_POL</th>
											<th>PEL_MUAT</th>
											<th>PEL_BONGKAR</th>
											<th>GUDANG_TUJUAN</th>
											<th>KODE_KANTOR</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><input class="form-control" tabindex="6" type="text" name="no_pol" maxlength="9" value="<?php echo $data['no_pol'];?>"></td>
											<td><input class="form-control" tabindex="7" type="text" name="pel_muat" maxlength="6" value="<?php echo $data['pel_muat'];?>"></td>
											<td>
												<label class="form-control">IDCGK</label>
												<input type="hidden" name="pel_bongkar" value="IDCGK">
												<!-- <input class="form-control" tabindex="9" type="text" name="pel_bongkar" value="<?php //echo $data['pel_bongkar'];?>"> -->
											</td>
											<td>
												<label class="form-control">TA12</label>
												<input type="hidden" name="gudang_tujuan" value="TA12">
												<!-- <input class="form-control" tabindex="10" type="text" name="gudang_tujuan" value="<?php //echo $data['gudang_tujuan'];?>"> -->
											</td>
											<td>
												<label class="form-control">050100</label>
												<input type="hidden" name="kode_kantor" value="050100">
												<!-- <input class="form-control" tabindex="11" type="text" name="kode_kantor" value="<?php //echo $data['kode_kantor'];?>"> -->
											</td>
										</tr>
									</tbody>
								</table>

							</div>
							<center><button tabindex="24" type="submit" class="btn btn-success">Save</button></center>
			        </div>
			    </div>
			</div>
			</form>
		</div>
	</div>
<?php echo $data['footer'];?>
		<?php if($data['error']&&$data['error']!=''){?>
		<script type="text/javascript">
			alert('<?php echo $data["error"];?>');
		</script>
		<?php }?>