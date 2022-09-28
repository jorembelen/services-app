
@section('title', 'Book Service')

<div>

    <div class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-header text-center">
                        <h2>Book Service</h2>
                    </div>
                    <form wire:submit.prevent="book('{{ $serviceId }}')">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Service Location <span class="text-danger">*</span></label>
                                    <input class="form-control" type="text" placeholder="Enter a location" wire:model.defer="state.location">
                                    @error('location')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Service amount</label>
                                    <input class="form-control" type="text" wire:model.defer="state.price" readonly>
                                    @error('price')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                               <div class="form-group">
                                    <label>Date <span class="text-danger">*</span></label>
                                    <x-datepicker id="date" wire:model.defer="state.date" :error="'date'"/>
                                    @error('date')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Time slot <span class="text-danger">*</span></label>
                                    <select class="form-control form-select" wire:model.defer="state.time">
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="12:00">12:00 PM</option>
                                        <option value="13:00">01:00 PM</option>
                                        <option value="14:00">02:00 PM</option>
                                        <option value="15:00">03:00 PM</option>
                                        <option value="16:00">04:00 PM</option>
                                        <option value="17:00">05:00 PM</option>
                                        <option value="18:00">06:00 PM</option>
                                        <option value="19:00">07:00 PM</option>
                                    </select>
                                    @error('time')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="text-center">
                                        <div id="load_div"></div>
                                    </div>
                                    <label>Notes</label>
                                    <textarea class="form-control" rows="5" wire:model.defer="state.notes"></textarea>
                                    @error('notes')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn" type="submit">Continue to Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>﻿

    <x-confirmation-alert />

</div>
