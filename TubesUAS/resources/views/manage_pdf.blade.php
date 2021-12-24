<!DOCTYPE html>
<html>
    
<head>
    <title>Vacaytour - Report</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Booking</h4>
    </center>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>TTL</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Paket</th>
                <th>Bukti Transfer</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($book as $a)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{$a->nama}}</td>
                <td>{{$a->email}}</td>
                <td>{{$a->ttl}}</td>
                <td>{{$a->notelp}}</td>
                <td>{{$a->alamat}}</td>
                <td>{{$a->paket}}</td>
                <td>{{$a->bukti_tf}}</td>
                <td>{{$a->status}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>