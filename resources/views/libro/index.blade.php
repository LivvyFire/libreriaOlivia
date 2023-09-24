@extends('layouts.app')

@section('template_title')
    Libro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Libro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('Libro.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Number</th>
                                        
										<th>Title</th>
										<th>Author</th>
										<th>Year Of Publication</th>
										<th>Genre</th>
										<th>Loaned</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($libros as $libro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $libro->title }}</td>
											<td>{{ $libro->author }}</td>
											<td>{{ $libro->year_of_publication }}</td>
											<td>{{ $libro->genre }}</td>
											<td>{{ $libro->loan->status }}</td>

                                            <td>
                                                <form action="{{ route('Libro.destroy',$libro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('Libro.show',$libro->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('Libro.edit',$libro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $libros->links() !!}
            </div>
        </div>
    </div>
@endsection