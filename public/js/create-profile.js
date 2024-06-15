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

    Livewire.dispatch("initSearch");

    Livewire.on("closeModal", function () {
        console.log("close");
        $("#create-profile-modal").modal("hide");
    });
    Livewire.on("openModal", function () {
        console.log("open");
        $("#create-profile-modal").modal("show");
    });
    Livewire.on("openProfileModal", function () {
        $("#view-profile-modal").modal("show");
    });
    Livewire.on("infoProfileModal", function () {
        $("#info-profile-modal").modal("show");
    });
});
