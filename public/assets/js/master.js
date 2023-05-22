$(document).ready(function () {

    $("#loading").fadeOut("slow");

    var t = $('#example').DataTable();
    var counter = 1;
 
    $('#addRow').on('click', function () {
        t.row.add([counter + '.1', counter + '.2', counter + '.3', counter + '.4', counter + '.5']).draw(false);
        counter++;
    });
 
    $("#manage_Retailer").hide();
    $("#r_profile_form :input").prop("disabled", true);
    $("#r_profile_action :input").prop("disabled", false);

    $('#managedistributor').DataTable();
    $("#manage_Distributor").hide();
    $("#d_profile_form :input").prop("disabled", true);
    $("#d_profile_action :input").prop("disabled", false);

});

let usernameError = true;
let phone_numberError = true;
let emailError = true;
let passwordError = true;

$("#username").keyup(function () {
    validateUsername();
});

$("#phone_number").keyup(function () {
    var newVal = $(this).val().replace(".", ""); 
	$(this).val(newVal); 
    validatePhoneNumber();
});
$("#email").keyup(function () {
    validateEmail();
});
$("#password").keyup(function () {
    validatePassword();
});

function validateUsername() {
    let usernameValue = $("#username").val();
    if (usernameValue.length === "" || $.trim(usernameValue) === "") {
      $("#username_check").html("Username is required");
      $("#username").focus();
      usernameError = false;
      return false;
    } else if (usernameValue.length < 3 || usernameValue.length > 10) {
      $("#username_check").show();
      $("#username_check").html("Length of username must be between 3 and 10");
      $("#username").focus();
      usernameError = false;
      return false;
    } else {
      usernameError = true;
      $("#username_check").hide();
    }
}

function validatePhoneNumber() {
   
    let phone_numberValue = $("#phone_number").val();
    if (phone_numberValue.length == "") {
      $("#phone_number_check").html("Phone number is required");
      $("#phone_number").focus();
      phone_numberError = false;
      return false;
    } else if (phone_numberValue.length < 10 || phone_numberValue.length > 10 ) {
      $("#phone_number_check").show();
      $("#phone_number_check").html("Length of phone number must be between 10 digits");
      $("#phone_number").focus();
      phone_numberError = false;
      return false;
    } else {
      phone_numberError = true;
      $("#phone_number_check").hide();
    }
}

function validateEmail() {
    let emailValue = $("#email").val();
    let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
    if (emailValue.length == "") {
      $("#email_check").html("Email is required");
      $("#email").focus();
      emailError = false;
      return false;
    } else if (emailValue.length < 3 || emailValue.length > 40) {
      $("#email_check").show();
      $("#email_check").html("Length of email must be between 3 and 40");
      $("#email").focus();
      emailError = false;
      return false;
    } 
    else if (regex.test(emailValue)) {
        $("#email_check").hide();
        emailError = true;
    } else {
        $("#email_check").html("Invalid email");
        emailError = false;
    }
}

function validatePassword() {
    let passwordValue = document.getElementById("password").value;
    if (passwordValue.length == "") {
      $("#password_check").html("Password is required");
      $("#password").focus();
      passwordError = false;
      return false;
    } else if (passwordValue.length < 8 || passwordValue.length > 20) {
      $("#password_check").show();
      $("#password_check").html("Length of password must be between 8 and 20");
      $("#password").focus();
      passwordError = false;
      return false;
    } else {
      passwordError = true;
      $("#password_check").hide();
    }
}

$('#signup').on('click', function () {
    validateUsername();
    validatePhoneNumber();
    validateEmail();
    validatePassword();
    if (
      usernameError === true && phone_numberError === true && emailError === true &&
      passwordError === true
    ) {
        registeration();
    } else {
      return false;
    }
});

function registeration (register) {
    $.ajax({
        type: "POST",
        url: "authentication",
        data: {
            "username" : $("#username").val(),
            "phone_number" : $("#phone_number").val(),
            "email" : $("#email").val(),
            "password" : $("#password").val(),
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            "Content-Type": "application/json",
        },
        success: function (data) {
            console.log(data);
            // if(data.success){
            //     $.toast({ text: data.success, heading: 'Success', icon: 'success', showHideTransition: 'fade', allowToastClose: true, hideAfter: 5000, stack: 5, position: 'top-right', textAlign: 'left', loader: true, loaderBg: '#9EC600' });
            //     $("#loading").fadeOut("slow");
            //     window.location.href = "verifyOtp";
            // }
            // else{
            //     $.toast({ text: "Something went wrong!", heading: 'Error', icon: 'error', showHideTransition: 'fade', allowToastClose: true, hideAfter: 5000, stack: 5, position: 'top-right', textAlign: 'left', loader: true, loaderBg: '#9EC600' });
            // }
         
         
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

$('#example tbody').on('click', 'tr', function () {

    var value = $(this).closest("tr").find("td:eq(0)").text();
    $("#example").hide();
    $("#example_wrapper").hide();
    $("#user_data").text(value);
    $("#manage_Retailer").show();
    $("#manage_Distributor").show();

} );

$('#managedistributor tbody').on('click', 'tr', function () {

    var value = $(this).closest("tr").find("td:eq(0)").text();
    $("#managedistributor").hide();
    $("#managedistributor_wrapper").hide();
    $("#user_data").text(value);
    $("#manage_Distributor").show();
    
} );

$('#user_data_back').on('click', function () {

    $("#manage_Retailer").hide();
    $("#example").show();
    $("#example_wrapper").show();

});

$('#user_data_back1').on('click', function () {

    $("#manage_Distributor").hide();
    $("#managedistributor").show();
    $("#managedistributor_wrapper").show();
    
});

$('#r_profile_edit').on('click', function () {
    $("#r_profile_form :input").prop("disabled", false);
});

$('#d_profile_edit').on('click', function () {
    $("#d_profile_form :input").prop("disabled", false);
});


