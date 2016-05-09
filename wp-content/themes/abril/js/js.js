$(document).ready(function () {
    $("input[type=button]").each(function () {
        if ($(this).attr("ico").length)
            $(this).css("background-image", "url('" + $("#path").val() + "/img/icon/button/" + $(this).attr("ico") + ".png')");
    });

    $(document).on("click", "button", function () {
        if ($(window).width() < 992) {
            if ($(".page-menu ul").css("display") == "none")
                $(".page-menu ul").slideDown("fast");
            else
                $(".page-menu ul").slideUp("fast");
        }
    });

    $(window).resize(function () {
        if ($(window).width() < 992)
            $(".page-menu ul").css("display", "none");
        else
            $(".page-menu ul").css("display", "inline-block");
    });

    sq();

    $(window).resize(function () {
        sq();
    });

});
function sq() {
    $(".sq").each(function () {
        $(this).css("height", $(this).width() * 0.83);
    });
}