@section('title', 'Service Create')
<div>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>Add Service</h2>
                    </div>
                    <form>
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Information</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Service Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Service Amount <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Service Location <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
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
                                        <select class="form-control form-select">
                                            <option>Choose Category...</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Sub Category <span class="text-danger">*</span></label>
                                        <select class="form-control form-select">
                                            <option>House Cleaning</option>
                                            <option>Full Car Wash</option>
                                            <option>Roofing</option>
                                            <option>Indoor Glass</option>
                                            <option>Convertible Fridge</option>
                                            <option>Fridge</option>
                                            <option>Car Wash</option>
                                            <option>Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Offer</h3>
                            <div class="membership-info">
                                <div class="row form-row membership-cont">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Service Offered <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-more form-group">
                                <a href="javascript:void(0);" class="add-membership"><i class="fas fa-plus-circle"></i> Add More</a>
                            </div>
                        </div>
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Details Information</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Descriptions <span class="text-danger">*</span></label>
                                        <textarea class="form-control service-desc"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="service-fields mb-3">
                            <h3 class="heading-2">Service Gallery </h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="service-upload">
                                        <i class="fas fa-cloud-upload-alt"></i> <span>Upload Service Images *</span>
                                        <input type="file" multiple>
                                    </div>
                                    <div>
                                        <ul class="upload-wrap">
                                            <li>
                                                <div class="upload-images">
                                                    <img alt="Service Image" src="assets/img/services/service-08.jpg">
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>﻿

</div>
