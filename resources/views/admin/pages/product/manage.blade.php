@extends('admin.layouts.master')

@section('libcss')
    <link href="{{asset('admin_lib/')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
@endsection

@section('adminindex')


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Product List</h5>
    @include('admin.partial.messages')
    <div class="table-responsive">
      <table id="zero_config" class="table table-striped table-bordered">
        <thead>

          <tr>
            <th>title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>acton</th>
          </tr>

        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>
              <a href="{{ route('admin.product.edit', $product->id ) }}" class="btn btn-success"> Edit </a>
              <a href="#deleteModel{{ $product->id }}" data-toggle="modal"  class="btn btn-danger"> Delete </a>
              
              <!-- Delete Modal -->
              <div class="modal fade" id="deleteModel{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete?</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                      <form action="{{ route('admin.product.delete' , $product->id) }}" method="post">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger" >Permanent Delete</button>
                      </form>

                    </div>
                    <div class="modal-footer">
                      
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
          </tr>
          @endforeach
          
        </tbody>
        <tfoot>
          <tr>
            <th>title</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>acton</th>
          </tr>
        </tfoot>
      </table>
    </div>

  </div>
</div>





@endsection

@section('libjs')
    <script src="{{asset('admin_lib/')}}/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
@endsection


