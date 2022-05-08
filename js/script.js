$("body").ready(function () {
    $('input[type=hidden]').val("")
});

function toggle(target, n) {
    $(target).toggleClass('active');
    let actionTraget = $(`.action input:eq( ${n - 1})`);
    console.log(actionTraget);
    if ($(target).hasClass('active')) actionTraget.val('1');
    else actionTraget.val('');
}