@extends('admin.master')
@section('title', 'Dashboard')
@section('content')

<section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3> 1 </h3>

              <p> Booking </p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href=" {{ route('booking.index') }} " class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3> 1</h3>

              <p> Review Hotel </p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('review.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3> 1 </h3>

              <p>Review Tour</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('tour-review.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3> 1 </h3>

              <p> Review Cruise </p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{ route('cruise-review.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-sm-12 connectedSortable">
          <div class="card direct-chat direct-chat-primary">
            <div class="card-header">
              <h3 class="card-title">Booking</h3>
              <div class="card-tools">
                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                <button type="button" class="btn btn-tool" data-widget="collapse">
                  <i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"
                        data-widget="chat-pane-toggle">
                  <i class="fa fa-comments"></i>
                </button>
                <button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="direct-chat-messages" style="height: auto">
                  <div class="card">
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Last Name</th>
                              <th>Email</th>
                              <th>Engine version</th>
                              <th>Telephone</th>
                              <th>Total Price	</th>
                            </tr>
                          </thead>
                          <tbody>
                              @isset($books)
                              @foreach ($books as $book)
                                  <tr>
                                      <th scope="row">{{ $book ? $book->book_id : "" }}</th>
                                      <td>{{ $book ? $book->last_name : ""  }}</td>
                                      <td>{{ $book ? $book->email : ""  }}</td>
                                      <td>{{ $book ? $book->telephone : ""  }}</td>
                                      <td>{{ $book ? $book->total : ""  }}</td>
                                      <td class="text-right">
                                          <form id="delete-{{$book['book_id']}}" action="{{ route('booking.destroy', ['id'=>$book['book_id']]) }}" method="post">
                                              {{ csrf_field() }}
                                              <input name="_method" type="hidden" value="DELETE">
                                              <button class="btn btn-danger pull-right" type="button" onclick="confirm('Are you sure?') ? $('#delete-{{$book['book_id']}}').submit() : false;">
                                                  <i class="fa fa-trash"></i>
                                              </button>
                                          </form>
                                          <a style="margin-right: 5px" 
                                              href="{{ route('booking.show', ['id'=>$book['book_id']]) }}"
                                              class="btn btn-primary pull-right"
                                          >
                                              <i class="fa fa-eye"></i>
                                           </a>
                                      </td>
                                  </tr>
                              @endforeach
                          @endisset
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
              </div>
            </div>
            <div class="card-footer">
              @isset ($books)
                <div class="clear"></div>
                <div class="gdlr-pagination">
                    {{ $books->links('vendor.pagination.bootstrap-4') }}   
                </div>
              @endisset 
            </div>
          </div>
        </section>
      </div>
    </div>
  </section>

@endsection