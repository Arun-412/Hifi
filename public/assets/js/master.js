$(document).ready(function () {

    var t = $('#example').DataTable();
    var counter = 1;
 
    $('#addRow').on('click', function () {
        t.row.add([counter + '.1', counter + '.2', counter + '.3', counter + '.4', counter + '.5']).draw(false);
 
        counter++;
    });

    $('#signup').on('click', function () {
        $('#signup').text("Verify OTP");
      
    });
 
    $("#manage_Retailer").hide();
    $("#r_profile_form :input").prop("disabled", true);
    $("#r_profile_action :input").prop("disabled", false);

    $('#managedistributor').DataTable();
    $("#manage_Distributor").hide();
    $("#d_profile_form :input").prop("disabled", true);
    $("#d_profile_action :input").prop("disabled", false);

});

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


