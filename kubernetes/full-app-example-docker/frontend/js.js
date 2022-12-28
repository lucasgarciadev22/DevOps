$("#btn_save").on("click", function() {
    
    var txt_name = $("#name").val();
    var txt_message = $("#message").val(); 

    $.ajax({
        url: "http://35.224.5.250:30005/",
        type: "post",
        data: {name: txt_name, message: txt_message},
        beforeSend: function() {
            $("#answer").html("Sending data...");
        }
    }).done(function(e) {
        $("#answer").html("Data saved...");
    })

})
