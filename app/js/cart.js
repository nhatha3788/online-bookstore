function addCart(book_id){
    quantity = $("#set-quantity").val();
    customer_id = $("#customer-id").val();
    $.ajax({
        type: "POST",
        url: '../../controller/addCart_ctl.php',
        data: {quantity:quantity,customer_id:customer_id,book_id:book_id},
        success: function(response){

        }
    });
}