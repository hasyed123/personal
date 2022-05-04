$("button#submit").click(function () {
    if($("#message").val() == "" || $("#email").val() == ""){
        $("#submitMessage").html("Please fill both fields");
    }
    else{
        $.post($("form").attr("action"), 
        $("form :input").serializeArray(),
        function(data){
            $("#submitMessage").html(data);
        });
    }

    $("form").submit(function(){
        return false;
    });
});

