@extends('layouts.app')

@section('template_title')
    Test
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Test') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tests.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Task1</th>
										<th>Task2</th>
										<th>Task3</th>
										<th>Task4</th>
										<th>Task5</th>
										<th>Task6</th>
										<th>Task7</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tests as $test)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $test->task1 }}</td>
											<td>{{ $test->task2 }}</td>
											<td>{{ $test->task3 }}</td>
											<td>{{ $test->task4 }}</td>
											<td>{{ $test->task5 }}</td>
											<td>{{ $test->task6 }}</td>
											<td>{{ $test->task7 }}</td>

                                            <td>
                                                <form action="{{ route('tests.destroy',$test->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tests.show',$test->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tests.edit',$test->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tests->links() !!}
            </div>
        </div>
    </div>
@endsection
