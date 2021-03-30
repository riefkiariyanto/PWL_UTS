@extends('layout')

@section('content')
<style type="text/css">
    table {
        border-collapse: collapse;
        width: 65%;
        font-size: 10pt;
        border: 2px solid rgb(255, 255, 255);
        color: #232323;
    }
    th, td {
        font:400
        text-align: center;
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
        <th width="100px">Action</th>
      </tr>
      <tr>
      </thead>
      <tbody>
        @foreach ($blog as $b)
        <tr>
          <td>{{ $b-> id}}</td>
          <td>{{ $b-> kode_barang }}</td>
          <td>{{ $b-> nama_barang }}</td>
          <td>{{ $b-> kategori_barang }}</td>
          <td>{{ $b-> harga }}</td>
          <td>{{ $b-> qty }}</td>
          <td>
            <form action="{{ route('barang.destroy', $b->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('barang.show', $b->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('barang.edit', $b->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ini?')">Delete</button>
            </form>
        </td>
        </tr> 
       
        @endforeach
       
      </tbody>
    </table>
    
    <div class="d-flex">
        {{ $blog->links() }}
    </div>
    @endsection

    

