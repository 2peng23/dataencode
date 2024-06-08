$(document).ready(function () {
    // When the button is clicked, show the modal
    $("#create-profile").click(function () {
        $("#create-profile-modal").modal("show");
    });

    // form-btn
    $(".next-btn").click(function (e) {
        e.preventDefault();
        var currentTab = $(this).closest(".tab-pane");
        var nextTab = currentTab.next(".tab-pane");
        $('a[href="#' + nextTab.attr("id") + '"]').tab("show");
    });

    $(".prev-btn").click(function (e) {
        e.preventDefault();
        var currentTab = $(this).closest(".tab-pane");
        var prevTab = currentTab.prev(".tab-pane");
        $('a[href="#' + prevTab.attr("id") + '"]').tab("show");
    });
});
