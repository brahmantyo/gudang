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
			<div class="panel-heading"><strong><h4>HEADER DATA</h4></strong></div>
			<div class="panel-body">
				<form action="?url=kemasan/saveHeader" method="POST">
					<table class="table">
						<tr>
							<td width="200px">KD_DOK</td>
							<td>
								<input tabindex="1" type="text" name="kd_dok" class="form-item">
							</td>
						</tr>
						<tr>
							<td>KD_TPS</td>
							<td>
								<input tabindex="2" type="text" name="kd_tps" class="form-item">
							</td>
						</tr>
						<tr>
							<td>NM_ANGKUT</td>
							<td>
								<input tabindex="3" type="text" name="nm_angkut" class="form-item">
							</td>
						</tr>
						<tr>
							<td>NO_VOY_FLIGHT</td>
							<td>
								<input tabindex="4" type="text" name="no_voy_flight" class="form-item">
							</td>
						</tr>
						<tr>
							<td>CALL_SIGN</td>
							<td>
								<input tabindex="5" type="text" name="call_sign" class="form-item">
							</td>
						</tr>
						<tr>
							<td>TGL_TIBA</td>
							<td>
								<input tabindex="6" type="text" name="tgl_tiba" class="form-item calendar">
							</td>
						</tr>
						<tr>
							<td>KD_GUDANG</td>
							<td>
								<input tabindex="7" type="text" name="kd_gudang" class="form-item">
							</td>
						</tr>
						<tr>
							<td>REF_NUMBER</td>
							<td>
								<input tabindex="8" type="text" name="ref_number" class="form-item">
							</td>
						</tr>
					</table>
					<center><button tabindex="9" class="btn btn-success" type="submit">Save Header</button></center>
				</form>
			</div>
		</div>
	</div>
<?php echo $data['footer'];?>