<div>

				<!-- Page Header -->
				<div class="page-header">
					<div class="row">
						<div class="col">
							<h3 class="page-title">Categories</h3>
						</div>
						<div class="col-auto text-end">
                            @if ($showFiltered !== 'add')
                            <a href="#" class="btn btn-primary add-button ms-3" wire:click.prevent="filtered('add')">
								<i class="fas fa-plus"></i>
							</a>
                            @endif
						</div>
					</div>
				</div>
				<!-- /Page Header -->



                @if ($showFiltered == 'categories')
                <div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-hover table-center mb-0 datatable">
										<thead>
											<tr>
												<th>#</th>
												<th>Name</th>
												<th>Slug</th>
												<th>Description</th>
												<th class="text-end">Action</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($categories as $category)
                                            <tr>
                                             <td>{{ $loop->iteration }}</td>
                                             <td>
                                                <img class="rounded service-img me-1" src="{{ $category->default_image }}" alt="Category Image">{{ $category->name }}</td>
                                            </td>
                                            <td>{{ $category->slug }}</td>
                                            <td>{{ $category->description }}</td>
                                             <td class="text-end">
                                                <a href="#" class="btn btn-sm bg-success-light me-2" wire:click.prevent="edit('{{ $category->id }}')">	<i class="far fa-edit me-1"></i> Edit</a>
                                                <a href="#" class="btn btn-sm bg-danger-light me-2" wire:click.prevent="alertConfirm('{{ $category->id }}')">	<i class="fa fa-trash me-1"></i> Delete</a>
                                            </td>
                                            </tr>
                                        @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
                @endif

                @if ($showFiltered == 'add')
                <div class="card">
                    <div class="card-body">

                        <!-- Form -->
                        @if ($edit)
                        <form wire:submit.prevent="editCategory('{{ $catId }}')">
                        @else
                        <form wire:submit.prevent="addCategory">
                        @endif
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" type="text" wire:model="name" wire:keyup="generateSlug">
                                @error('name')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input class="form-control" type="text" wire:model="slug">
                                @error('slug')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input class="form-control" type="text" wire:model="description">
                                @error('description')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Category Image</label>
                                <input class="form-control" type="file"  wire:model="image">
                                @error('image')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            @if ($edit)
                                @if ($this->image)
                                <div class="form-group">
                                    <img  alt="" src="{{ $this->image->temporaryUrl() }}" width="350px">
                                </div>
                                @else
                                <div class="form-group">
                                    <img  alt="" src="{{ Storage::disk('s3')->url('uploads/categories/' .$oldImage) }}" width="350px">
                                </div>
                                @endif
                            @else
                                @if ($this->image)
                                <div class="form-group">
                                    <img  alt="" src="{{ $this->image->temporaryUrl() }}" width="350px">
                                </div>
                                @endif
                            @endif
                            <div class="mt-4">
                                <div wire:loading wire:target="{{ $edit ? 'editCategory' : 'addCategory' }}" class="progress-bar progress-bar-striped progress-bar-animated mt-2" role="status" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Processing . . .</div>
                                <div wire:loading wire:target="image" class="progress-bar progress-bar-striped progress-bar-animated mt-2" role="status" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Uploading . . .</div>

                                <div wire:loading.remove wire:target="{{ $edit ? 'editCategory, image' : 'addCategory, image' }}">
                                    <button class="btn btn-primary" type="submit">{{ $edit ? 'Update Category' : 'Add Category' }}</button>
                                    <a href="#" class="btn btn-link" wire:click.prevent="filtered('categories')">Cancel</a>
                                </div>
                            </div>
                        </form>
                        <!-- Form -->

                    </div>
                </div>
                @endif

                <x-confirmation-alert />
                <x-sweet-alert />
</div>
