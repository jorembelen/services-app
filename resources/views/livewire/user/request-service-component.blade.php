<div>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>Request Service</h2>
                    </div>
                    <form wire:submit.prevent="addService">
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Information</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Service Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" wire:model="state.name">
                                        @error('name')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Service Amount <span class="text-danger">*</span></label>
                                        <input class="form-control" type="number" wire:model.defer="state.price">
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
                                        <select class="form-control form-select" wire:model.defer="state.category_id">
                                            <option value="">Choose Category...</option>
                                            @foreach ($categories as $data)
                                            <option value="{{ $data->id }}">{{ $data->category->name }} > {{ $data->name }}</option>
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
                            <h3 class="heading-2">Details Information</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Descriptions <span class="text-danger">*</span></label>
                                        <textarea class="form-control service-desc" wire:model.defer="state.description"></textarea>
                                        @error('description')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="submit-section text-end">
                            <div wire:loading wire:target="addService" class="progress-bar progress-bar-striped progress-bar-animated mt-2" role="status" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">Processing . . .</div>
                            <div wire:loading.remove wire:target="addService">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>﻿


</div>
