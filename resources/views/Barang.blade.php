<style type="text/css">
    table {
        border-collapse: collapse;
        width: 65%;
        font-size: 10pt;
        border: 2px solid rgb(255, 255, 255);
        color: #232323;
    }
    th, td {
        text-align: left;
        padding: 5px;
        font-size: 12pt;
        border: 1px solid rgb(53, 53, 53);
        color: #0041a2;
    }
    tr:nth-child(even) {
        background-color: #ffffff
    }
</style>
<table class='table table-bordered'>
      <tr>
        <th>id_Barang</th>
        <th>kode_barang</th>
        <th>nama_barang</th>
        <th>kategori_barang</th>
        <th>harga</th>  
        <th>qty</th>
      </tr>
      <tr>
        @foreach ($blog as $b)
        <tr>
          <td>{{ $b-> id}}</td>
          <td>{{ $b-> kode_barang }}</td>
          <td>{{ $b-> nama_barang }}</td>
          <td>{{ $b-> kategori_barang }}</td>
          <td>{{ $b-> harga }}</td>
          <td>{{ $b-> qty }}</td>
        </tr> 
        @endforeach
       
      </tr>
    </table>
    
    </body>
    </html>
    
    </div>  

    

