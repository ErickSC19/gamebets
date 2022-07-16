
function clean(){
    $("#lemail").val("");
    $('#lpass').val("");
};
$("#userForm").on('submit', function(e){
    e.preventDefault();

    lemail=$('#lEmail').val();
    lpass=$('#lPass').val();
    $.ajax({
        data: {
            'op':'login',
            'lEmail': lemail,
            'lPass': lpass,
        },
            url: '../ajax/users.php?=login',
            type: 'POST',
            dataType: 'json',
            succes: function(response) {
                if (response.data){
                    $(location).attr("href","../views/index.php");
                } else {
                    alert("Incorrect / not found data");
                }
            },
        
        error: function(response) {
        console.log('error',response);
        
        }
        });
    });


    function savedit(e)
    {
        
        e.preventDefault(); //No se activará la acción predeterminada del evento
        $("#btnGuardar").prop("disabled",false);
        var formData = new FormData($("#formulario")[0]);
        
        //if($("#formulario").valid()) {
            $.ajax({
                    url: "../ajax/users.php?op=save/edit",
                    type: "POST",		
                     data:formData,
                    cache:false,
                    contentType: false,
                    processData: false,
                    success:function(data){
                           $("#modalRegForm").modal('hide');
                        $('#modalConfirm').modal({ keyboard: false, backdrop: 'static' });
                         
                        // bootbox.alert(data) ;	
                         //$(location).attr("href","index.php");  
                           
                        },
                        
                    error: function(data){
                            console.log("error");
                            console.log(data);
                            
                        }
    
                   });
    //
        
        clean();
    
    }