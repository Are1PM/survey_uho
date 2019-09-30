const SweetAlert = $('.flash-pendaftaran').data('pendaftaran');

if (SweetAlert) {
	Swal.fire({
		type: 'success',
		title: 'Terimakasih!',
		text: '' + SweetAlert
	});
}

// tombol pendaftaran 
// $('.pendaftaran').on('click', function (e) {

// 	e.preventDefault();

// 	Swal.fire({
// 		type: 'warning',
// 		title: 'Pendaftaran ditutup!',
// 		text: '' + SweetAlert
// 	});

// });
