<div>


            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Services</h3>
                    </div>
                    <div class="col-auto text-end">
                        <a class="btn btn-white filter-btn" href="javascript:void(0);" id="filter_search">
                            <i class="fas fa-filter"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <form action="#" method="post" id="filter_inputs">
                <div class="card filter-card">
                    <div class="card-body pb-0">
                        <div class="row filter-row">
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>Service</label>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>From Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <label>To Date</label>
                                    <div class="cal-icon">
                                        <input class="form-control datetimepicker" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block w-100" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Service</th>
                                            <th>Location</th>
                                            <th>Category</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @foreach ($services as $service)
                                           <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img class="rounded service-img me-1" src="{{ $service->defaultImage() }}" alt="">
                                                {{ $service->name }}
                                            </td>
                                            <td>{{ $service->provider->providerLocation() }}</td>
                                            <td>{{ $service->category->name }} </td>
                                            <td>{{ $service->price }}</td>
                                            <td>
                                                <div class="status-toggle">
                                                    @livewire('admin.toggle-button', ['model' => $service, 'field' => 'status'], key($service->id))
                                                </div>


                                            </td>
                                            <td></td>
                                           </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <ul class="pagination mt-2">
                                <li>{{ $services->links() }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <x-confirmation-alert />

</div>

