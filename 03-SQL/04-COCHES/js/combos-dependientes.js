
$(document).ready(function(){
	
/* ............primer combo desplegable....... */

 $('#cmarca').on('change',function(){
    var ID=$(this).val();
     //alert(ID);
    if(ID){
    $.ajax({
    type:'POST',
    url:'ajaxData.php',
    data:'id='+ID,
        success:function(html){
        $('#cmodelo').html(html);
        }
    });
    }
 });
    
});// FIN READY



/*  ....al cargar la página.....

 var ID=$('#cmarca').val();
 if(ID){
 	$.ajax({
 	type:'POST',
 	url:'ajaxData.php',
 	data:'id='+ID,
 	success:function(html){
 		$('#cmodelo').html(html);
 	}
 	});
 }
*/
		

	