$(document).ready(function() {
    // Hide all submenus by default
    $(".item .sub-menu").hide();

    // Show the submenu for the clicked item and toggle the open class
    $(".item .menu-btn").click(function(event) {
        //event.preventDefault(); // Prevent the default behavior of anchor links

        // Get the parent item of the clicked menu button
        var parentItem = $(this).closest(".item");

        // Toggle the class 'open' on the parent item to change the chevron icon
        parentItem.toggleClass("open");

        // Hide all other open submenus (except the one clicked)
        $(".item.open").not(parentItem).removeClass("open");

        // Toggle the display of the submenu for the clicked item
        parentItem.find(".sub-menu").slideToggle();

        // Hide all other submenus (except the one clicked)
        $(".item .sub-menu").not(parentItem.find(".sub-menu")).slideUp();
    });  

}); 