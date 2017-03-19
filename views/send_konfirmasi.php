<?php echo $data['header'];?>
<script type="text/javascript" src="public/js/jquery.min.js"></script>
<script type="text/javascript" src="public/js/vkbeautify.0.99.00.beta.js"></script>
	<div class="col-md-12">
		<ul class="breadcrumb">
			<li>
				<a href="/">Home</a> <span class="divider"> </span>
			</li>
			<li class="active">
				<a> Debug: XML Data</a>
			</li>
		</ul>
		<div id="header_form" class="panel panel-info">
			<div class="panel-heading"><strong><h4>DEBUG: XML DATA</h4></strong></div>
			<div class="panel-body">
				<textarea id="txt1" style="width: 100%;height: 300px;color: #633; font-size:12; font-family:courier; font-weight: bold;" disabled="disabled">
				</textarea>
				<center>
					<a href="?url=kemasan/send/<?php echo $data[refnum];?>/<?php echo $data[type];?>/&konfirm=1" class="btn btn-success" >Send Data</a>
					<a href="?url=kemasan/daftar" class="btn btn-success" >Cancel</a>
				</center>
			</div>
		</div>
	</div>
<script>
	$('#txt1').val(vkbeautify.xml('<?php echo $data[xml];?>'));
</script>
<?php echo $data['footer'];?>