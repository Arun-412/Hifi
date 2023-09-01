// before page load start

$(document).ready(function () {
    $('#provider_name_check').hide();
    $('#provider_email_check').hide();
    $('#provider_mobile_check').hide();
});

// before page load end

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
    provider_name_validation();
    provider_email_validation();
    provider_mobile_validation();
    if (
        Provider_Name_Error == false &&
        Provider_Email_Error == false &&
        Provider_Mobile_Error == false
    ) {
        Add_Provider ();
    } else {
        return false;
    }
});

let Provider_Name_Error = false;
let Provider_Email_Error = false;
let Provider_Mobile_Error = false;

$("#Provider_Name").keyup(function () {
    provider_name_validation();
});

$("#Provider_Email").keyup(function () {
    provider_email_validation();
});

$("#Provider_Mobile_Number").keyup(function () {
    provider_mobile_validation();
});

$('#provider_model_close_icon').click(function (){
    $('#Provider_Name').val('');
    $('#Provider_Email').val('');
    $('#Provider_Mobile_Number').val('');
    $('#provider_name_check').hide();
    $('#provider_email_check').hide();
    $('#provider_mobile_check').hide();
});

$('#provider_model_cancel_btn').click(function () {
    $('#Provider_Name').val('');
    $('#Provider_Email').val('');
    $('#Provider_Mobile_Number').val('');
    $('#provider_name_check').hide();
    $('#provider_email_check').hide();
    $('#provider_mobile_check').hide();
});

function provider_name_validation() {
    var Provider_Name = $('#Provider_Name').val();
    if(Provider_Name.length == 0){
        Provider_Name_Error = true;
        $('#provider_name_check').show();
        $('#provider_name_check').text('Please Enter Provider Name');
    }else if(Provider_Name.length < 3 || Provider_Name.length > 40){
        Provider_Name_Error = true;
        $('#provider_name_check').show();
        $('#provider_name_check').text('Length of provider name must be between 3 and 40');
    }else{
        Provider_Name_Error = false;
        $('#provider_name_check').hide();
    }
}

function provider_email_validation() {
    var Provider_Email = $('#Provider_Email').val();
    let validate_email = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    if(Provider_Email.length == ''){
        Provider_Email_Error = true;
        $('#provider_email_check').show();
        $('#provider_email_check').text('Please Enter Provider Email');
    }else if(Provider_Email.length < 5 || Provider_Email.length > 40){
        Provider_Email_Error = true;
        $('#provider_email_check').show();
        $('#provider_email_check').text('Length of provider Email must be between 3 and 40');
    }else if(validate_email.test(Provider_Email) == false){
        Provider_Email_Error = true;
        $('#provider_email_check').show();
        $('#provider_email_check').text('Please enter valid Email');
    }else{
        Provider_Email_Error = false;
        $('#provider_email_check').hide();
    }
}

function provider_mobile_validation() {
    var Provider_Mobile = $('#Provider_Mobile_Number').val();
    if(Provider_Mobile.length == ''){
        Provider_Mobile_Error = true;
        $('#provider_mobile_check').show();
        $('#provider_mobile_check').text('Please Enter Provider Mobile Number');
    }else if(Provider_Mobile.length < 9 || Provider_Mobile.length > 10){
        Provider_Mobile_Error = true;
        $('#provider_mobile_check').show();
        $('#provider_mobile_check').text('Length of Provider Mobile Number must be 10 digit');
    }else{
        Provider_Mobile_Error = false;
        $('#provider_mobile_check').hide();
    }
}

// provider page end 