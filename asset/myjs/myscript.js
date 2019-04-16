const flashData = $('.flash-data').data('flashdata');


if(flashData) {
	swal({
		title:"",
		 text:"Data Berhasil " + flashData, 
		 type:"success"
	});
}

// tombol hapus
$('.tombol-hapus').on('click', function(e) {

	e.preventDefault();

	const href= $(this).attr('href');

	swal({
  title: "Apakah anda yakin?",
  text: "Data akan di hapus",
  type: "warning",
  showCancelButton: true,
  confirmButtonClass: "btn-danger",
  confirmButtonText: "Hapus",
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



