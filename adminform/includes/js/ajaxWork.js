// ajaxWork.js
function showUsers(){  
    $.ajax({
        url:"./adminView/manageusers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}