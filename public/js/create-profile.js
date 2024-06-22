$(document).ready(function () {
    document.getElementById('is_married1').addEventListener('change', function() {
        var mDiv = document.getElementById('m-div1');
        if (this.value == '1') {
            mDiv.style.display = 'block';
        } else {
            mDiv.style.display = 'none';
        }
    });
    document.getElementById('is_married').addEventListener('change', function() {
        var mDiv = document.getElementById('m-div');
        if (this.value == '1') {
            mDiv.style.display = 'block';
        } else {
            mDiv.style.display = 'none';
        }
    });

    $(".next-btn1").click(function (e) {
        e.preventDefault();
        var currentTab = $(this).closest(".tab-pane");
        var nextTab = currentTab.next(".tab-pane");
        $('a[href="#' + nextTab.attr("id") + '"]').tab("show");
    });

    $(".prev-btn1").click(function (e) {
        e.preventDefault();
        var currentTab = $(this).closest(".tab-pane");
        var prevTab = currentTab.prev(".tab-pane");
        $('a[href="#' + prevTab.attr("id") + '"]').tab("show");
    });
    Livewire.dispatch("initSearch");

    // Livewire.on("openModal", function () {
    //     console.log("close");
    //     $("#create-profile-modal").modal("show");
    // });
    Livewire.on("closeModal", function () {
        console.log("close");
        $("#create-profile-modal").modal("hide");
    });
    Livewire.on("infoProfileModal", function () {
        $("#info-profile-modal").modal("show");
    });

    $(document).on("submit", "#create-form", function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "/profile",
            type: "post",
            data: formData,
            success: function (res) {
                console.log(res);
                // Reset the form
                if (res.errors) {
                    // Show the error div
                    $("#error-div").show();

                    // Map all errors inside the div
                    $("#error-div").html(
                        res.errors
                            .map(function (error) {
                                return (
                                    "<li class='text-danger'>" + error + "</li>"
                                );
                            })
                            .join("")
                    );
                }
                if (res.success) {
                    // Hide the error div if there are no errors
                    $("#error-div").hide();
                    $("#create-form")[0].reset();
                    $("#create-profile-modal").modal("hide");
                    Livewire.dispatch("initSearch");
                }
            },
        });
    });
    $(document).on("click", "#edit-button", function (e) {
        e.preventDefault();
        $("#edit-profile-modal").modal("show");
        var id = $(this).data("id");
        $.ajax({
            url: "/profile/" + id,
            type: "get",
            data: id,
            success: function (res) {
                var data = res;
                // console.log(res);
                $("#first_name").val(data.first_name);
                $("#middle_name").val(data.middle_name);
                $("#last_name").val(data.last_name);
                $("#suffix").val(data.suffix);
                $("#birthdate").val(data.birthdate);
                $("#birthplace").val(data.birthplace);
                $("#registry_no").val(data.registry_no);
                $("#page_no").val(data.page_no);
                $("#book").val(data.book);
                $("#mother_name").val(data.mother_name);
                $("#father_name").val(data.father_name);
                $("#is_married").val(data.is_married);
                if (data.is_married == 1) {
                    $('#m-div').show();
                }
                $("#m_date").val(data.m_date);
                $("#m_place").val(data.m_place);
                $("#profile_id").val(data.id);
            },
        });
    });
    $(document).on("submit", "#update-form", function (e) {
        var id = $("#profile_id").val();
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            url: "/profile/" + id,
            type: "put",
            data: formData,
            success: function (res) {
                console.log(res);
                $("#update-form")[0].reset();
                $("#edit-profile-modal").modal("hide");
                Livewire.dispatch("initSearch");
            },
        });
    });
});
