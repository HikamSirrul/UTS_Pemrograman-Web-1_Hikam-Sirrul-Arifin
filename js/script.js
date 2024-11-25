fetch('ambil_data.php')
.then(response => response.json())
.then(data => {
  // Cek apakah data berhasil diambil
  if (data && data[0]?.username) {
    document.getElementById('name').value = data[0].username;
  } else {
    console.log('Data tidak ditemukan');
  }
})
.catch(error => console.error('Error:', error));

document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah redirect form

        // Ambil data dari form
        const formData = new FormData(this);

        // Kirim data menggunakan fetch API
        fetch('dashboard.php', { // Ganti dengan URL endpoint yang sesuai
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Tampilkan pesan sukses atau gagal
            document.getElementById('message').innerHTML = data;
            document.getElementById('message').style.display = 'block';

            // Kosongkan textarea setelah pengiriman
            document.getElementById('pesan').value = '';
        })
        .catch(error => {
            console.error('Error:', error);
            document.getElementById('message').innerHTML = 'Terjadi kesalahan, silakan coba lagi.';
            document.getElementById('message').style.display = 'block';
        });
    });
    


