
$(document).ready(function () {
    console.log("Cart work");
    $("#spinner").hide();    
    payment();
});
function disableButton(event) {

}

function payment() {
   
       $("#target").on("submit", function (event) {
        $("#pay").hide();
        $("#spinner").show();
        var customerGender = $("#customer-gender").val();
        var customerName = $("#customer-name").val();
        var customerEmail = $("#customer-email").val();
        var customerDate = $("#customer-date").val();
        $('.error-message').remove();

        if (customerName === '') {
            $('<span class="error-message">Please enter a value.</span>').insertAfter('#customer-name');
        }
        if (customerEmail === '') {
            $('<span class="error-message">Please enter a value.</span>').insertAfter('#customer-email');
        }
        if (customerDate === '') {
            $('<span class="error-message">Please enter a value.</span>').insertAfter('#customer-date');
        }
        // check if any field its empty.
        if (customerName === '' || customerEmail === '' || customerDate === '' || customerGender === '') {
            //    TODO: Design best modal.
            $("#spinner").hide();
            $("#pay").show();
            event.preventDefault(); // Prevent the form from submitting
        } else {
            $("#spinner").show();
            // Api
            var apiEndpoint = "../api/paymentApi.php";
            // Form object.
            var requestData = {
                customerGender: customerGender,
                customerDate: customerDate,
                customerEmail: customerEmail,
                customerName: customerName
            }
            $.ajax({
                url: apiEndpoint,
                type: 'POST',
                data: requestData,
                dataType: 'json',
                cache: false,
                success: function (response) {
                    if (response.status == 200) {
                        $("#spinner").hide();
                        $("#pay").show();
                        $('#message').html(' <div class="alert alert-success" role="alert" >' + response.data.customerName + " Greet please check your mail." + '</div>')
                            .fadeOut(5000);
                        console.log(response);
                    } else {
                        $("#spinner").hide();
                        $("#pay").show();
                        $('#message').html('<div class="alert alert-danger" role="alert" >' + response.data.customerName + " Oupps! Failled to save your appointment." + '</div>')
                            .fadeOut(5000);
                        console.log(response)
                    }
                }  
            })
            // $("#spinner").hide();
            // $("#pay").show();
            event.preventDefault();
        }
       
    });
  
    
}
