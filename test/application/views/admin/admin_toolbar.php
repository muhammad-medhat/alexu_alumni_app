<ul id='admin_toolbar'>
  <li><?= form_button('publish', 'PUBLISH SELECTED','id="pub_all"') ?></li>
  <li><?= form_button('un-publish', 'UN-PUBLISH SELECTED', 'id="unpub_all"') ?></li>
  <li><?= form_button('delete', 'DELETE SELECTED', "id='delete'") ?></li>
</ul>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $('#pub_all').click(function(){
      var alumnies = [];
      $(".check:checked").each(function(){
        alumnies.push($(this).val());
      });
        publish_all(alumnies);
    });

    $('#unpub_all').click(function(){
      var alumnies = [];
      $(".check:checked").each(function(){
        alumnies.push($(this).val());
      });
        publish_all(alumnies, 0);
    });
    $('#delete').click(function(){
      alert('Under Construction');
    });
    function publish_all( _list, pub=1 ){
      var method = (pub==1)?'publish':'unpublish';
      var _url = '<?= base_url() .'admin/'?>' + method;
      var ids_arr = JSON.stringify(_list);
    
      $.ajax({
        url: _url,
        type: 'POST',
        data: {'ids': ids_arr} ,
        complete: function (jqXHR, textStatus) {
        
        },
        success: function (data, textStatus, jqXHR) {
       
   
          location.reload();
        },

        error: function ( jqXHR, textStatus, errorThrown) {
      
          alert( 'jqXHR:'+ jqXHR + ' textStatus:' + textStatus + ' errorThrown:' + errorThrown );
        }
      });

    }



  });
</script>
