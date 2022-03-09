// copywrite
var d = new Date();
var year = d.getFullYear();
document.getElementById("copy-year").innerHTML = year;
//Personal Counseling form
$(function () {
    var form = $("#ajax-personal-counseling");
    var formMessages = $("#form-messages");
    $(form).submit(function (e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
                type: "POST",
                url: $(form).attr("action"),
                data: formData,
            })
            .done(function (response) {
                $(formMessages).removeClass("text-danger");
                $(formMessages).addClass("text-success");
                $(formMessages).text(
                    "We will get back to you as soon as possible"
                );
                $("#name, #address, #number, #email").val("");
            })
            .fail(function (data) {
                $(formMessages).removeClass("text-success");
                $(formMessages).addClass("text-danger");
                if (data.responseText !== "") {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text(
                        "Oops! An error occurred and your message could not be sent."
                    );
                }
            });
    });
});
//contact form
$(function () {
    var form = $("#ajax-contact");
    var formMessages = $("#form-messages");
    $(form).submit(function (e) {
        e.preventDefault();
        var formData = $(form).serialize();
        $.ajax({
                type: "POST",
                url: $(form).attr("action"),
                data: formData,
            })
            .done(function (response) {
                $(formMessages).removeClass("text-danger");
                $(formMessages).addClass("text-success");
                $(formMessages).text("We will get back to you as soon as possible");
                $("#name, #email, #message").val("");
            })
            .fail(function (data) {
                $(formMessages).removeClass("text-success");
                $(formMessages).addClass("text-danger");
                if (data.responseText !== "") {
                    $(formMessages).text(data.responseText);
                } else {
                    $(formMessages).text(
                        "Oops! An error occurred and your message could not be sent."
                    );
                }
            });
    });
});
