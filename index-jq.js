$(document).ready(function() {
    $.get( "index.php" );
    // all custom jQuery will go here
    $("#eventTitle1").html($row);
});
