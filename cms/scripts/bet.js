var betstable;

function init(){
    showform(false);
    listBets();

    $("#betform").on("submit",function(e)
	{
		save_editbet(e);	
	})
}
function clean(){
    $("#amount").val("");
    $('#teamwins').val("");
    $("#redwins").val("");
	$("#bluewins").val("");
    $("#redname").val("");
	$("#bluename").val("");
    $("#available").val("");
	$("#game").val("");
}
function showform(flag){
    clean();
    if(flag){
        $("#betlist").hide();
        $("#betform").show();
        $("#btnsave").prop("disabled",false);
        $("#btnadd").hide();
    } else {
        $("#betlist").show();
        $("#betform").hide();
        $("#btnadd").show();

    }
}
function cancelForm(){
    clean();
    showform(false);
}
function listBets(){
    bets=$('#tblist').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        dom: 'Bfrtip',
        buttons: [		          
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
        "ajax":
            {
                usrl: '../ajax/bet.php?op=listbets',
                type : "get",
                dataType: "json",
                error: function(e){
                    console.log(e.responseText);
                }
            },
        "bDestroy": true,
        "iDisplayLength": 5,
        "order": [[0,"desc"]]
    }).DataTable();
}
function save_editbet(e)
{
	e.preventDefault(); //No se activará la acción predeterminada del evento
	$("#btnsave").prop("disabled",true);
	var formData = new FormData($("#betform")[0]);

	$.ajax({
		url: "../ajax/alumno.php?op=edit&createbet",
	    type: "POST",
	    data: formData,
	    contentType: false,
	    processData: false,

	    success: function(datos)
	    {                    
	          bootbox.alert(datos);	          
	          showform(false);
	          betstable.ajax.reload();
	    }

	});
	clean();
}
function showbets(betid){
    $.post("../ajax/bet.php?op=showbet",{betid : betid}, function(data, status)
	{
    data = JSON.parse(data);
    showform(true);

    $("#redname").val(data.redname);
    $("#bluename").val(data.bluename);
    $("#redwins").val(data.redwins);
    $("#bluewins").val(data.bluewins);
    $("#available").val(data.available);
    $("#game").val(data.game);
    })
}
init();

function BetCardDisplay(){
    

    betcard = '<div class="col"><div class="card h-100"><img src="../public/assets/img/1.webp" class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">'+data.redname+' VS '+data.bluename+'</h5><p class="card-text">game '+data.game+'</p></div><div class="card-footer"><small class="text-muted">Last updated 3 mins ago</small></div></div></div>';
    document.getElementById('betcards').insertAdjacentHTML('beforeend', betcard);
}