var bets;

function init(){
    showform(false);
    listBets();
}
function clean(){
    $("#amount").val("");
    $('#teamwins').val("");
}
function showform(flag){
    clean();
    if(flag){
        $("#betlist").hide();
        $("#betform").show();
        $("#btnsave").prop("disabled",false);
    } else {
        $("#betlist").show();
        $("#betform").hide();

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
        "ajax":
            {
                url: '../ajax/Bet.php?op=listbets',
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

init();