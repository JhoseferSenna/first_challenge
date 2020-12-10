function erro(div, mensagem) {
  $(div).animate(
    {
      height: "+=72px"
    },
    500
  );
  $(
    '<div class="alert alert-danger">' +
    '<button type="button" class="close" data-dismiss="alert">' +
    "&times;</button>" +
    mensagem +
    "</div>"
  )
    .hide()
    .appendTo(div)
    .fadeIn(500);

  $(".alert")
    .delay(500)
    .fadeOut("normal", function () {
      $(this).remove();
    });

  $(div)
    .delay(500)
    .animate(
      {
        height: "-=72px"
      },
      500
    );
}
function sucesso(div, mensagem) {

  $(div).animate(
    {
      height: "+=72px"
    },
    500
  );
  $(
    '<div class="alert alert-success">' +
    '<button type="button" class="close" data-dismiss="alert">' +
    "&times;</button>" +
    mensagem +
    "</div>"
  )
    .hide()
    .appendTo(div)
    .fadeIn(500);

  $(".alert")
    .delay(500)
    .fadeOut("normal", function () {
      $(this).remove();
    });

  $(div)
    .delay(500)
    .animate(
      {
        height: "-=72px"
      },
      500
    );
}