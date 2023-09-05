$(function () {
  $('.tombolTambahData').on('click', function () {
    console.log('click')
    $('#judulModal').html('Tambah Data Siswa')
    $('.modal-footer button[type=submit]').html('Tambah Data')
    $('#nama').val('')
    $('#jenis_kelamin').val('')
    $('#alamat').val('')
    $('#id').val('')
  })

  $('.tampilModalUbah').on('click', function () {
    console.log('click')
    $('#judulModal').html('Ubah Data Siswa')
    $('.modal-footer button[type=submit]').html('Ubah Data')
    $('.modal-body form').attr('action', 'http://localhost/php-mvc/public/datasiswa/edit')
    const id = $(this).data('id')
    $.ajax({
      url: 'http://localhost/php-mvc/public/datasiswa/getedit',
      data: { id: id },
      method: 'post',
      dataType: 'json',
      success: function (data) {
        console.log(data)
        $('#nama').val(data.nama)
        $('#jenis_kelamin').val(data.jenis_kelamin)
        $('#alamat').val(data.alamat)
        $('#id').val(data.id)
      }
    })
  })
})
