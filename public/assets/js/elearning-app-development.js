function devolopment_service_dactive() {
    $(".devolopment_service_tab .s-sidebar .s-item").each(function () {
        $(this).removeClass('active');
    });
}
$(document).ready(function () {
    $(".s-item").click(function () {
        devolopment_service_dactive();
        $(this).addClass('active');
        let sr = $(this).attr('id');
        $(`.all-app-services`).children('div').hide();
        $(`[data-hash=${sr}]`).fadeIn();
        console.log(sr);
    });
});