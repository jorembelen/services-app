@section('title', 'Service Create')
<div>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>Add Service</h2>
                    </div>
                    <form wire:submit.prevent="addService">
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Information</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Service Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" wire:model="name" wire:keyup="generateSlug">
                                        @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Slug <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" wire:model="slug" >
                                        @error('slug')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Service Amount <span class="text-danger">*</span></label>
                                        <input class="form-control" type="number" wire:model.defer="price">
                                        @error('price')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Category</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Category <span class="text-danger">*</span></label>
                                        <select class="form-control form-select" wire:model.defer="category_id">
                                            <option value="">Choose Category...</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Offer</h3>
                            <div class="membership-info">

                                <div class="row form-row membership-cont">
                                    <?php $i = 0 ?>
                                    @foreach($inputs as $key => $value)
                                    <?php $i++;?>
                                    <div class="col-12 col-md-10 col-lg-10">
                                        <div class="form-group">
                                            <input type="text" class="form-control" wire:model.defer="services_offered.{{ $value }}">
                                            @error('services_offered')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @if ($i > 1)
                                    <div class="col-12 col-md-2 col-lg-2">
                                        <a href="#" class="btn btn-danger" wire:click.prevent="remove('{{ $key }}')"><i class="far fa-times-circle"></i></a>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="add-more form-group">
                                <a href="#" class="add-memberships" wire:click.prevent="add('{{ $i }}')"><i class="fas fa-plus-circle"></i> Add More</a>
                            </div>
                        </div>


                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Details Information</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Descriptions <span class="text-danger">*</span></label>
                                        <textarea class="form-control service-desc" wire:model.defer="description"></textarea>
                                        @error('description')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Images </h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="service-upload">
                                        <i class="fas fa-cloud-upload-alt"></i> <span>Upload Images Only *</span>
                                        <input type="file" wire:model.defer="images" multiple>
                                        @error('images')
                                        <div class="text-center text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    @if ($images)
                                    <div>
                                        <ul class="upload-wrap">
                                            @foreach ($images as $img)
                                            <li>
                                                <div class="upload-images">
                                                    <img alt="Service Image" src="{{ $img->temporaryUrl() }}">
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="submit-section text-end">
                            <div wire:loading wire:target="addService" class="progress-bar progress-bar-striped progress-bar-animated mt-2" role="status" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Processing . . .</div>
                            <div wire:loading wire:target="images" class="progress-bar progress-bar-striped progress-bar-animated mt-2" role="status" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Uploading . . .</div>

                            <div wire:loading.remove wire:target="images, addService">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>﻿

</div>
