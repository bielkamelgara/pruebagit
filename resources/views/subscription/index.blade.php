@extends('layouts.app')

@section('template_title')
    Subscription
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Subscription') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('subscriptions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Subscription</th>
										<th>Duration</th>
										<th>Price</th>
										<th>Type</th>
										<th>Id Pay</th>
										<th>Id Activities</th>
										<th>Id User</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($subscriptions as $subscription)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $subscription->id_subscription }}</td>
											<td>{{ $subscription->duration }}</td>
											<td>{{ $subscription->price }}</td>
											<td>{{ $subscription->type }}</td>
											<td>{{ $subscription->id_pay }}</td>
											<td>{{ $subscription->id_activities }}</td>
											<td>{{ $subscription->id_user }}</td>

                                            <td>
                                                <form action="{{ route('subscriptions.destroy',$subscription->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('subscriptions.show',$subscription->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('subscriptions.edit',$subscription->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $subscriptions->links() !!}
            </div>
        </div>
    </div>
@endsection
