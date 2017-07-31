<div class="navbar-collapse collapse">
	<ul class="nav navbar-nav">
		<li><a href="<?=base_url('Admin')?>">All Meeting</a></li>
		<li><a href="<?=base_url('Admin/ruangdivisi')?>">R & D</a></li>
	</ul>
</div>

<script>
	$(".nav li").on("click", function() {
		$(".nav li").removeClass("active");
		$(this).addClass("active");
	});

</script>

