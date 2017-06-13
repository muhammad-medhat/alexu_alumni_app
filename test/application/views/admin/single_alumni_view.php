<style type="text/css" >
.data input, .data select{width:300px;}
</style>
<?php
$exceptions = array('id', 'alumni_id');
$fid = $alumni->fid;
$gid = $alumni->gid;
$certificate_type_id = $alumni->certificate_type_id;
        $cert_image = base_url() .APPPATH .uploads_folder 
          .DIRECTORY_SEPARATOR .$alumni->cert_file;


$gid_list = simple_array($grades, $grades_field);
$fid_list = simple_array($faculties_list, $faculties_field);
$certificate_type_list = simple_array($ac_degrees, $certificate_field);
?>
<?php if(validation_errors()) {?>
  <div class='errors'>
    <?php echo validation_errors('<p class="error">'); ?>
  </div>
<?php } ?>

<?= form_open("admin/perform_edit/$alumni->alumni_id")?>
      <table class='single' >
        <tr>
          <td colspan='2'>
        <img id="myImg" src="<?=$cert_image?>" alt='<?="$alumni->faculty $alumni->graduation_year"?>' width="300" height="200">
          </td>
        </tr>
        <tr>
          <td class='label'><?= $this->lang->line('alumni_id')?></td>
          <td class='data'><?= $alumni->alumni_id?></td>
        </tr>
        <tr>
          <td class='label'> <?= $this->lang->line('alumni_name')?></td>
          <td class='data'><?= form_input( 'name', $alumni->name)?></td>
        </tr>

        <tr>
          <td class='label'><?= $this->lang->line('alumni_faculty')?></td>
          <td class='data'><?= form_dropdown('fid', $fid_list, $fid);?></td>
        </tr>
        <tr>
          <td class='label'><?= $this->lang->line('alumni_department')?></td>
          <td class='data'><?= form_input( 'department', $alumni->department)?></td>
        </tr>
        <tr>
           <td class='label'><?= $this->lang->line('alumni_division')?></td>
           <td class='data'><?= form_input( 'division', $alumni->division)?></td>
        </tr>

        <tr>
          <td class='label'><?= $this->lang->line('alumni_ac_degree')?></td>
          <td class='data'><?= form_dropdown('certificate_type_id', $certificate_type_list, $certificate_type_id);?>  </td>
        </tr>
        <tr>
          <td class='label'><?= $this->lang->line('alumni_graduation_year')?></td>
          <td class='data'><?= form_input( 'graduation_year', $alumni->graduation_year, 'size=4')?></td>
        </tr>
        <tr>
          <td class='label'><?= $this->lang->line('alumni_degree')?></td>
           <td class='data'><?= form_dropdown('gid', $gid_list, $gid);?></td>
        </tr>

        <tr>
           <td class='label'><?= $this->lang->line('email')?></td>
           <td class='data'><?= form_input( 'email', $alumni->email)?></td>
        </tr>

<tr id='other'>
  <td colspan='2'>
    <div class='panel'>
      <?=$this->lang->line('other_data')?>
      <table>
      <?php foreach($alumni_data as $k=>$v){?>
          <?php if( !in_array($k, $exceptions)) {?>
            <tr>
               <td class='label'><?= $this->lang->line($k)?></td>
               <td class='data'><?= form_input( $k, $v)?></td>
            </tr>
           <?php }?>
      <?php } ?>
      </table>
    </div>
  </td>
</tr>
        <tr>
          <td  colspan='2'>
              <?= form_submit('submit', $this->lang->line('edit_data'));?>
          </td>
        </tr>
      </table>
<?= form_close() ?>


<!-- Trigger the Modal -->

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
<style>
/* Style the Image Used to Trigger the Modal */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    /*max-width: 700px;*/
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption { 
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
<script type="text/javascript" charset="utf-8">
  // Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
//span.onclick = function() { 
modal.onclick = function() { 
  modal.style.display = "none";
}
modalImg.hover=function(){
alert('asdf');
}
</script>
