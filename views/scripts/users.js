
$(function(){
    var $userform = $('#userForm'),
    $registerform = $('#UserRegistForm'),
    $loginError = $('#loginError'),
    $loginErrorText = $('#loginErrorText'),
    $registError = $('#registError'),
    $registErrorText = $('#registErrorText');
    $registSuccess = $('#registSuccess');
    $registSuccessText = $('#registSuccessText');
    function clean(){
        $("#lemail").val("");
        $('#lpass').val("");
    };
    $("#loginButton").click(function(){
        //e.preventDefault();
    
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
                cache: false,
                //contentType: false,
                //processData: false,
                success: function(response) {
                    //console.log(response);
                    //var jsonData = JSON.parse(response);
                    //console.log(jsonData);
                    if (response.error == true){
                        //alert(response.errorType);
                        $loginError.removeClass('d-none');
                        //$loginError.css('display', 'block');
                        $loginErrorText.html(response.errorType);
                    } else {
                        $(location).attr("href","../views/index.php");
                    }
                },
            
                error: function(response) {
                console.log('error',response);
            
                }
            });
        });
    $("#logoutbtn").click(function(){
        //e.preventDefault
        $.ajax({
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
    
    $("#registerButton").click(function(){
    
        var remail = $("#remail").val();
        var ruser = $("#ruser").val();
        var rpassword = $("#rpassword").val();
        var rpasswordc = $("#rpasswordc").val();
    
        $.ajax({
            url: '../ajax/users.php?op=save/edit',
            type: 'POST',
            data: {
                'rEmail' : remail,
                'rUser' : ruser,
                'rPass' : rpassword,
                'rPassC' : rpasswordc
    
            },
            dataType: 'json',
            success: function(response){
                if(response.error){
                    $registError.removeClass('d-none');
                    $registErrorText.html(response.errorType);
                } else {
                    $registError.addClass('d-none');
                    $registSuccess.removeClass('d-none');
                    $registSuccessText.html(response.errorType);
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


});


