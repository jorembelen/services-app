<div>

           <!-- Page Header -->
           <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Categories</h3>
                </div>

            </div>
        </div>
        <!-- /Page Header -->



        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach ($categories as $category)
                                       <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td></td>
                                       </tr>
                                   @endforeach
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination mt-2">
                            <li>{{ $categories->links() }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


</div>
