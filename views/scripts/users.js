

var $userform = $('#userForm'),
    $registerform = $('#UserRegistForm');

function clean(){
    $("#lemail").val("");
    $('#lpass').val("");
};
$("#loginButton").click(function(e){
    e.preventDefault();

    var lemail=$('#lEmail').val();
    var lpass=$('#lPass').val();
    $.ajax({
        url: '../ajax/users.php?op=login',
        type: 'POST',
        data: {
            'op' : 'login',
            'lEmail' : lemail,
            'lPass' : lpass
        },
            dataType: 'json',
            success: function(response) {
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
$("#logoutbtn").click(function(e){
    e.preventDefault
    $.ajax({
        data: {
            'op' : 'logout',
            'logout':true,
        },
            url: '../ajax/users.php?op=logout',
            type: 'POST',
            dataType: 'html',
            success: function(response){
                $(location).attr("href","../views/index.php");
            },
            error: function(response) {
                console.log('error',response);
            }
    })
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