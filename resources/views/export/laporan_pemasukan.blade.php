
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Laporan Pemasukan</title>
        <link rel="stylesheet" type="text/css" href="/assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
            LAPORAN PEMASUKAN
        </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0">
             
                <thead style="">
                    <tr class="tr-title"> 
                    <th align="center" valign="middle">No</th> 
                    <th align="center" valign="middle">Tanggal</th>    
                    <th align="center" valign="middle">Nama</th>
                    <th align="center" valign="middle">Banyaknya</th>
                    <th align="center" valign="middle">Harga</th>
                    <th align="center"  valign="middle">Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
              @foreach ($transaksi as $data)
                <tr>
                   
                        <td width='' height='20' align='center' valign='middle'>{{$no++}}</td>
                        <td width='' height='20' align='center' valign='middle'>{{ \Carbon\Carbon::parse($data->tanggal_penjualan)->format('d-m-Y')}}</td>
                         <td width='' height='20' align='center' valign='middle'>{{ $data->pemesanan['nama_pemesan'] }}</td>
                        <td width='' height='20' align='center' valign='middle'></td>
                        <td width='' height='20' align='left' valign='middle'></td>
                        <td width='' height='20' align='left' valign='middle'>Rp {{number_format($data->total_pembayaran,0,'.','.')}}</td>    
                </tr>

       @endforeach

  </tbody>
         </table>
            </div>
        </div>
    </body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
