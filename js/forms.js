
/*
$("#form_login").on("submit", function(event){
    // cancels the form submission
    event.preventDefault();
    alert("hello");
    submitNGOForm();
    return false;
});
*/

function submitNGOForm(){
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var email = $("#email_id").val();
    var password =  $("#password").val(); //$("#message").val();

    // alert('reached in submit');

    $.ajax({
        type: "POST",
        url: "ngo_details_form.php",
        data: "name=" + name + "&email_id=" + email + "&password=" + password,
    });

    $("#myModal").modal('hide');

    return false;
}

function submitEventDetailsForm(){
    // Initiate Variables With Form Content
    var event_title = $("#title").val();
    var location = $("#location").val();
    var city = $("#city").val();
    var state = $("#state").val();
    var country = $("#country").val();
    var pincode = $("#pincode").val();
    var google_map_link = $("#google_map_link").val();
    var event_time_from = $("#event_time_from").val();
    var event_time_to = $("#event_time_to").val();

     alert(event_title);

    $.ajax({
        type: "POST",
        url: "add_event_details.php",
        data: "event_title=" + event_title + "&location=" + location + "&city=" + city +
        "&state=" + state + "&country=" + country + "&pincode=" + pincode +
        "&google_map_link=" + google_map_link + "&event_time_from=" + event_time_from +
        "&event_time_to=" + event_time_to,
    });

    $("#add_event_Modal").modal('hide');

    return false;
}
