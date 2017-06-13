<style type="text/css" media="all">
 .sortable td{ 
    word-wrap:break-word; 
    width:150px;
    text-align:right;
}
.even{background-color: #e6f3f8;}  
.odd{background-color: #e1e1e1;}  
.sortable{
  width: 77%;
  margin-right: 144px;
  -webkit-box-shadow: 5px 4px 5px 0px #999;
} 
.cert_image{display:none;}
.cert_image img{
  width:400px;
  height:200px;
float:left;
z-index:100;
}
input[type=checkbox]{width:20px;height:20px;margin-right:20%}
</style>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
$('#select_all').change(function() {
  var checkboxes = $('.check');
    //var checkboxes = $(this).closest('form').find(':checkbox');
    if($(this).is(':checked')) {
        checkboxes.prop('checked', true);
    } else {
        checkboxes.prop('checked', false);
    }
  });
    /*
    $("#select_all").click(function(){
      //alert('asdf');
      var x = $('.check')
        //.attr('checked')=$(this).attr('checked');
    //$('input:checkbox').prop('checked', this.checked);
  });
     */
    $('.accept, .deny').click(function(){
      alumni_id=this.id;
      $.ajax({
        url:"<?php echo site_url('admin/change_state/')?>/" + alumni_id, 
        success: check_state($(this))
      });
    });
    
    $('.cert_thumbs').mouseout(function(){
      id = this.id;
      alumni_id=id.substr(6, 10);
      //alert(id + "xxxxxxxxxx" + alumni_id);
      $('#cert_' + alumni_id).hide();
     
    });

    $('.cert_thumbs').hover(function(){
      id = this.id;
      alumni_id=id.substr(6, 10);
      //alert(id + "xxxxxxxxxx" + alumni_id);
      $('#cert_' + alumni_id).show();
    });


  });
  function check_state(res){
    if(res.hasClass( "accept" )){
      res.removeClass('accept').addClass('deny');
    } else{
        res.removeClass('deny').addClass('accept');

    } 
  }
</script>
<?php
//var_dump($this->session->userdata);
$this->load->view('admin/admin_toolbar');
$images = scandir(APPPATH .uploads_folder .DIRECTORY_SEPARATOR .thumbs_folder);
$files = array_diff($images, array('.', '..'));
$chk = array('name'=>'checkall-toggle', 'id'=>'select_all', 'title'=>'check_all', 'checked'=>'');
?>
<div id='info'>
    <?php if(isset($num_rows)){
      echo $this->lang->line('alumni_result') ." $num_rows";  
    } else {
      //echo $this->lang->line('no_result') ;
    }
    ?>
</div>

<table class='sortable'>
  <thead>
    <tr>
      <td><?=form_checkbox($chk)?></td>
      <td>id</td>
      <td><?= $this->lang->line('name')?></td>
      <td><?= $this->lang->line('graduation_year')?></td>
      <td><?= $this->lang->line('faculty')?></td>
      <td><?= $this->lang->line('published')?></td>
      <td><?= $this->lang->line('certificate')?></td>
    </tr>
  </thead>
  <tbody>

<?php $i=0; foreach ($alumnies as $graduate) { ?>
<?php $class = ($i % 2 == 0)?'odd': 'even'?>
<tr class='<?=$class?>'>
      <!--<td><?= form_checkbox("chk_$graduate->alumni_id", $graduate->approved,  'class=check')?></td>-->
      <td><input type="checkbox" id="chk_<?=$graduate->alumni_id ?>" name='alumni[]' class='check' value="<?=$graduate->alumni_id?>" /></td>

    <td><?php echo anchor('admin/edit/' .$graduate->alumni_id, $graduate->alumni_id)?></td>
    <td><?php echo $graduate->name?></td>
    <td><?php echo $graduate->graduation_year?></td>
    <td><?php echo $graduate->faculty?></td>
    <td style='width:16px'>
      <?php
        $approved = $graduate->approved;
        $class = ($approved == '1')? 'accept':'deny'; 
      ?>
        <div id="<?php echo $graduate->alumni_id?>" class="<?php echo $class?>"> </div>

    </td>
<?php 
        $thumbs_filename = base_url() .APPPATH .uploads_folder
          .DIRECTORY_SEPARATOR .thumbs_folder 
          .DIRECTORY_SEPARATOR .$graduate->cert_file;
        $cert_image = base_url() .APPPATH .uploads_folder 
          .DIRECTORY_SEPARATOR .$graduate->cert_file;

?>
    <td>
      <img id='<?php echo "thumb_$graduate->alumni_id" ?>' class='cert_thumbs' 
          src="<?php echo $thumbs_filename?>" alt="Certeficate" />   
    </td>

  </tr>
  <tr>
    <td colspan='7'>
      <div class='cert_image' id='<?php echo "cert_$graduate->alumni_id"?>'>
        <img src='<?php echo $cert_image ?>' />
      </div>
    </td>
  </tr>
<?php $i++;} ?>
</tbody>
</table>

 <?php echo"" . $this->pagination->create_links();?>



