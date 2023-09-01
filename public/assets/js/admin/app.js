// provider page start 

function Add_Provider () { 
    $("#loading").fadeIn("slow");
    $.ajax({
    type: "POST",
    url: "/admin/add_provider",
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: {
        "Provider_Name":$("#Provider_Name").val(),
        "Provider_Email":$("#Provider_Email").val(),
        "Provider_Mobile_Number":$("#Provider_Mobile_Number").val(),
    },
    dataType: 'json',
    
    success: function (data) {
        console.log(data);
        if(data.status == true){
            $.toast({ text: data.message, heading: 'Success', icon: 'success', showHideTransition: 'fade', allowToastClose: true, hideAfter: 10000, stack: 5, position: 'top-right', textAlign: 'left', loader: true, loaderBg: '#9EC600' });
            $("#loading").fadeOut("slow");
            location.reload();
        }
        else{  
            $("#loading").fadeOut("slow");             
            $.toast({ text: data.message, heading: 'Error', icon: 'error', showHideTransition: 'fade', allowToastClose: true, hideAfter: 5000, stack: 5, position: 'top-right', textAlign: 'left', loader: true, loaderBg: '#F21915' });
        }
    },
    error: function (jqXHR, exception) {
        $("#loading").fadeOut("slow");
        var response = jqXHR.responseText;
        var obj = JSON.parse(response);
        var message = obj.message;
        $.toast({ text: message, heading: 'Error', icon: 'error', showHideTransition: 'fade', allowToastClose: true, hideAfter: 5000, stack: 5, position: 'top-right', textAlign: 'left', loader: true, loaderBg: '#9EC600' });
    }
    }); 
}

$("#Add_Provider").on('click', function () {
    Add_Provider ();
});

// provider page end 