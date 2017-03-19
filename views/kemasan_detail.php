<?php echo $data['header'];?>
	<div class="col-md-12">
		<ul class="breadcrumb">
			<li>
				<a href="/">Home</a> <span class="divider"> </span>
			</li>
			<li class="active">
				<a >Input Kemasan</a></span>
			</li>
		</ul>
		<div id="header_form" class="panel panel-info">
			<div class="panel-heading"><strong><h4>DETAIL DATA</h4></strong></div>
			<div class="panel-body">
				<form action="?url=kemasan/saveHeader" method="POST">
				<div class="col-md-6">
					<table class="table">
						<tr>
							<td width="200px"><label for="">NO_BL_AWB</label></td>
							<td><input tabindex="1" type="text" name="no_bl_awb"></td>
						</tr>
						<tr>
							<td><label for="">TGL_BL_AWB</label></td>
							<td><input tabindex="2" type="text" name="tgl_bl_awb" class="calendar"></td>
						</tr>
						<tr>
							<td><label for="">NO_MASTER_BL_AWB</label></td>
							<td><input tabindex="3" type="text" name="no_master_bl_awb"></td>
						</tr>
						<tr>
							<td><label for="">TGL_MASTER_BL_AWB</label></td>
							<td><input tabindex="4" type="text" name="tgl_master_bl_awb" class="calendar"></td>
						</tr>
						<tr>
							<td><label for="">ID_CONSIGNEE</label></td>
							<td><input tabindex="5" type="text" name="id_consignee"></td>
						</tr>
						<tr>
							<td><label for="">CONSIGNEE</label></td>
							<td><input tabindex="6" type="text" name="consignee"></td>
						</tr>
						<tr>
							<td><label for="">BRUTO</label></td>
							<td><input tabindex="7" type="text" name="bruto"></td>
						</tr>
						<tr>
							<td><label for="">NO_BC11</label></td>
							<td><input tabindex="8" type="text" name="no_bc11"></td>
						</tr>
						<tr>
							<td><label for="">TGL_BC11</label></td>
							<td><input tabindex="9" type="text" name="tgl_bc11" class="calendar"></td>
						</tr>
						<tr>
							<td><label for="">NO_POS_BC11</label></td>
							<td><input tabindex="10" type="text" name="no_pos_bc11"></td>
						</tr>
						<tr>
							<td><label for="">CONT_ASAL</label></td>
							<td><input tabindex="11" type="text" name="cont_asal"></td>
						</tr>
						<tr>
							<td><label for="">SERI_KEMAS</label></td>
							<td><input tabindex="12" type="text" name="seri_kemas"></td>
						</tr>
						<tr>
							<td><label for="">KD_KEMAS</label></td>
							<td><input tabindex="13" type="text" name="kd_kemas"></td>
						</tr>
						<tr>
							<td><label for="">JML_KEMAS</label></td>
							<td><input tabindex="14" type="text" name="jml_kemas"></td>
						</tr>
						<tr>
							<td><label for="">KD_TIMBUN</label></td>
							<td><input tabindex="15" type="text" name="kd_timbun"></td>
						</tr>
					</table>
				</div>
				<div class="col-md-6">
					<table class="table">
						<tr>
							<td width="200px"><label for="">KD_DOK_INOUT</label></td>
							<td><input type="text" name="kd_dok_inout"></td>
						</tr>
						<tr>
							<td><label for="">NO_DOK_INOUT</label></td>
							<td><input type="text" name="no_dok_inout"></td>
						</tr>
						<tr>
							<td><label for="">TGL_DOK_INOUT</label></td>
							<td><input type="text" name="tgl_dok_inout" class="calendar"></td>
						</tr>
						<tr>
							<td><label for="">WK_INOUT</label></td>
							<td><input type="text" name="wk_inout"></td>
						</tr>
						<tr>
							<td><label for="">KD_SAR_ANGKUT_INOUT</label>
							</td><td><input type="text" name="kd_sar_angkut_inout"></td>
						</tr>
						<tr>
							<td><label for="">NO_POL</label></td>
							<td><input type="text" name="no_pol"></td>
						</tr>
						<tr>
							<td><label for="">PEL_MUAT</label></td>
							<td><input type="text" name="pel_muat"></td>
						</tr>
						<tr>
							<td><label for="">PEL_TRANSIT</label></td>
							<td><input type="text" name="pel_transit"></td>
						</tr>
						<tr>
							<td><label for="">PEL_BONGKAR</label></td>
							<td><input type="text" name="pel_bongkar"></td>
						</tr>
						<tr>
							<td><label for="">GUDANG_TUJUAN</label></td>
							<td><input type="text" name="gudang_tujuan"></td>
						</tr>
						<tr>
							<td><label for="">KODE_KANTOR</label></td>
							<td><input type="text" name="kode_kantor"></td>
						</tr>	
						<tr>
							<td><label for="">NO_DAFTAR_PABEAN</label></td>
							<td><input type="text" name="no_daftar_pabean"></td>
						</tr>
						<tr>
							<td><label for="">TGL_DAFTAR_PABEAN</label></td>
							<td><input type="text" name="tgl_daftar_pabean" class="calendar"></td>
						</tr>
						<tr>
							<td><label for="">NO_SEGEL_BC</label></td>
							<td><input type="text" name="no_segel_bc"></td>
						</tr>
						<tr>
							<td><label for="">TGL_SEGEL_BC</label></td>
							<td><input type="text" name="tgl_segel_bc" class="calendar"></td>
						</tr>
						<tr>
							<td><label for="">NO_IJIN_TPS</label></td>
							<td><input type="text" name="no_ijin_tps"></td>
						</tr>
						<tr>
							<td><label for="">TGL_IJIN_TPS</label></td>
							<td><input type="text" name="tgl_ijin_tps" class="calendar"></td>
						</tr>
					</table>
				</div>
				<center><button class="btn btn-success" type="submit">Save Detail</button></center>
				</form>
			</div>
		</div>
	</div>
<?php echo $data['footer'];?>