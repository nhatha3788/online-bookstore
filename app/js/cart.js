function addCart(book_id){
    quantity = $("#set-quantity").val();
    $.ajax({
        type: "POST",
        url: '../../controller/addCart_ctl.php',
        data: {quantity:quantity,book_id:book_id},
        success: function(){
            alert("Thêm vào giỏ hàng thành công");
        }
    });
}
