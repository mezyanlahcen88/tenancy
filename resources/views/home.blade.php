@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                            @foreach (App\Models\Tenant\Tenant::get() as $tenant)
<ul>
    <li><a href='https://{{$tenant->id}}.tenancy.com' target="_blanck">{{$tenant->id}}</a></li>
</ul>
                            @endforeach



                </div>
                <div class="card-body">
                        <h5>this for tenant {{tenant('id')}}</h5>
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-borderless table-primary align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody class="table-group-divider">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
