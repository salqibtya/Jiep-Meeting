
<script src="<?=base_url('assets/js/')?>jquery-3.2.1.min.js" type="text/javascript"></script>

<!--<script type="text/javascript">
  window.onload = function() {
    if (window.jQuery) {  
        $('#show').click(function(){
            $.ajax({
              type:"POST",
              url:"<?=base_url('Viewsarah/get_divisi')?>",
              data:
              success:function(data){
                $("#divisi-list").html(data);
              }
            })
        });
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script>-->
<script>
   window.onload = function() {
    if (window.jQuery) {  
        $('#show').on('change',function(){
            var value=$(this).val();
            $.ajax({  
              type:"POST",
              data: {id_divisi:value},
              url:"<?=base_url('Viewsarah/get_divisi')?>",
              success:function(data){
                $("#divisi-list").html(data)
              }
            });
        });
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script>
<!--<button id=show>
  Show Divisi
</button>-->
<body style="background-color:rgb(247,247,247) ">
<select id=show name="divisi">
  <?php foreach($divisis as $divisi_item): ?>
  <option value="<?=$divisi_item['id_divisi']?>"><?=$divisi_item['nama_divisi']?></option>
  <?php endforeach ?>
</select>

<div id="divisi-list"></div>

</body>