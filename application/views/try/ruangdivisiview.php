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
<script>
    $(document).ready(function(){
        $("#startTimestamp").on('change',function(){
            var start = $(this).val();
          $("#endTimestamp").on('change',function(){
            var end = $(this).val();
            console.log(start);
            console.log(end);
          });
        });

        
    });

</script>
<body style="background-color:rgb(247,247,247) ">
<select id=show name="divisi">
  <?php foreach($divisis as $divisi_item): ?>
  <option value="<?=$divisi_item['id_divisi']?>"><?=$divisi_item['nama_divisi']?></option>
  <?php endforeach ?>
</select>
<h2>EYAA</h2>
<div id="divisi-list"></div>
                      <div id="settanggal">
                       <input type="date" id="startTimestamp">

                       <input type="date" id="endTimestamp" >
                      </div>

<div><h1>AYEE</h1></div>
</body>