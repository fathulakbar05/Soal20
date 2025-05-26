<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

        <!-- Styles -->
        
    </head>
    <body>
        <div>
            <h1>Daftar Peminjaman</h1>
            <div>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                            </tr>
                        </thead>
                        <tbody id='tabelPeminjaman'>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(document).ready(function() {
                loadPeminjaman();

                function loadPeminjaman() {
                    $.get('/api/peminjaman', function(data) {
                        let html = '';
                        data.data.forEach(function(pjm) {
                            html += `
                                <tr>
                                    <td>${pjm.id_peminjaman}</td>
                                    <td>${pjm.nama_peminjam}</td>
                                    <td>${pjm.tanggal_pinjam}</td>
                                    <td>${pjm.tanggal_kembali}</td>
                                    <td>
                                        <button class="btn-delete" data-id="${pjm.id_peminjaman}">Hapus</button>
                                    </td>
                                </tr>
                            `;
                        });
                        $('#tabelPeminjaman').html(html);
                    });
                }

                $(document).on('click', '.btn-delete', function() {
                    if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                        const id = $(this).data('id'); 

                        $.ajax({
                            url: `/api/peminjaman/${id}`,
                            method: 'DELETE',
                            success: function() {
                                loadPeminjaman(); 
                                alert('Data berhasil dihapus!');
                            },
                            error: function(xhr, status, error) {
                                alert('Terjadi kesalahan saat menghapus data: ' + xhr.responseText);
                                console.error("Error:", error);
                            }
                        });
                    }
                });
            });
        </script>
    </body>
</html>
