@extends('layouts.dashboard')

@section('content')
    <div class="d-sm-flex text-center justify-content-between align-items-center mb-4">
        <h3 class="mb-sm-0 mb-1 fs-18">edit Reservations</h3>
        <ul class="ps-0 mb-0 list-unstyled d-flex justify-content-center">
            <li>
                <a href="{{route('admin.dashboard')}}" class="text-decoration-none">
                    <i class="ri-home-2-line" style="position: relative; top: -1px;"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <span class="fw-semibold fs-14 heading-font text-dark dot ms-2">edit Reservations</span>
            </li>
        </ul>
    </div>
  

            <div class="card bg-white border-0 rounded-10 mb-4">
                <div class="card-body p-4">
                    <h3 class="fs-18 mb-4 border-bottom pb-20 ">edit Reservations</h3>
                    <form action="{{ route('Reservations.update', $Reservation->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Name</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="name" class="form-control text-dark ps-5 h-58"
                                            placeholder="Enter Name" value="{{ old('name', $Reservation->name) }}">
                                        <i
                                            class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">date</label>
                                    <div class="form-group position-relative">
                                        <input type="date" name="date"  required  autofocus min="<?= date('Y-m-d'); ?>" class="form-control text-dark ps-5 h-58"
                                            placeholder="Enter date" value="{{ old('date', $Reservation->date) }}">
                                        <i
                                            class="ri-user-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Email Address</label>
                                    <div class="form-group position-relative">
                                        <input type="email" name="email"  class="form-control text-dark ps-5 h-58"
                                            placeholder="Enter Email Address" value="{{ old('email', $Reservation->email) }}">
                                        <i
                                            class="ri-mail-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Phone</label>
                                    <div class="form-group position-relative">
                                        <input type="text" name="Phone" placeholder="Phone" class="form-control text-dark ps-5 h-58" value="{{ old('Phone', $Reservation->Phone) }}" >
                                        <i
                                            class="ri-phone-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">time</label>
                                    <div class="form-group position-relative">
                                        <input type="time" name="time" class="form-control text-dark ps-5 h-58"
                                            placeholder=" time" value="{{ old('time', $Reservation->time) }}">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group mb-4">
                                    <label class="label">Select Person</label>
                                    <div class="form-group position-relative">
                                       
                                        <select  class="form-select form-control ps-5 h-58"
                                        aria-label="Default select example" name="Person" value="{{ old('Person', $Reservation->Person) }}">
                                            <option class="text-dark" value="AL">Select Person</option>
                                            <option class="text-dark" value="1">1 Person</option>
                                            <option class="text-dark" value="2">2 Person</option>
                                            <option class="text-dark" value="3">3 Person</option>
                                            <option class="text-dark" value="4">4 Person</option>
                                            <option class="text-dark" value="5">5 Person</option>
                                        </select>
                                        <i
                                            class="ri-map-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-group mb-4">
                                    <label class="label">message :</label>
                                    <div class="form-group position-relative">
                                        <textarea class="form-control ps-5 text-dark" name="message" placeholder="Write Message... " cols="30" rows="5">{{ old('message', $Reservation->message) }}</textarea>
                                        <i
                                            class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button type="submit"
                                        class="btn btn-primary py-3 px-5 fw-semibold text-white">edit Reservations</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       
@endsection
