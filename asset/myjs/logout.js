// tombol hapus
$('.tombol-logout').on('click', function(e) {

	e.preventDefault();

	const href= $(this).attr('href');

	swal({
  title: "Apakah anda yakin?",
  text: "Anda akan logout",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Logout",
  cancelButtonText: "cancel",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm) {
  if (isConfirm) {
    document.location.href= href;
  } else {
    swal("Cancelled", "Your imaginary file is safe :)", "error");
  }
});

})
