@extends('app')
@section('estilo')
     <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('contenido')
<x-app-layout>
    <div class="py-12">
        @include('plantilla.smallBoxes')
                  <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                      <!-- general form elements -->
                      <div class="card card-success">
                        <div class="card-header">
                          <h3 class="card-title">Persona</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{url('persona')}}" method="POST">
                          @csrf
                          <div class="card-body">
                            <div class="form-group">
                              <label>Nombre</label>
                              <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                              <label>Apellido</label>
                              <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                            </div>
                            <div class="form-group">
                              <label>Cédula</label>
                              <input type="text" name="cedula" class="form-control" placeholder="Cedula">
                            </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                            <button type="submit" class="btn btn-success">Registrar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
    </div>
</x-app-layout>

<div class="row">
  <div class="card col-md-12 ">
    <div class="card-header">
      <h3 class="card-title">:: Listado de frutas ::</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr style="text-align: center">
          <th>Items</th>
          <th>Nombre</th>
          <th>Cantidad</th>
          <th>Proveedor</th>
          <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($personas as $item)
          <tr style="text-align: center">
            <td>{{$loop->index+1}}</td>
            <td>{{$item->nombre}}</td>
            <td>{{$item->apellido}}</td>
            <td>{{$item->cedula}}</td>
            <td style="text-align: center">
              <form  style="float: left; margin-right: 10px; margin-left: 45%"  method="get" action="{{ url('persona', $item->id)}}">
                @csrf
                <button  type="submit" style="border: none" >
                  <i class="fas fa-edit"></i>
               </button>
              </form>
              <form  style="float: left;text-align: center" method="post" action="{{ url('persona', $item->id)}}">
                @method('delete')
                @csrf
                <button  type="submit" style="border: none" >
                  <i class="fas fa-trash"></i>
               </button>
              </form>
          </td>
          </tr> 


          @endforeach
  
        </tbody>
   
      </table>
    </div>
    <!-- /.card-body -->
  </div>

</div>
@endsection
@section('script')
  <!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection

