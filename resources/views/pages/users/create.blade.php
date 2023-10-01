@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Create User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Users</a></div>
                    <div class="breadcrumb-item"><a href="#">User</a></div>
                    <div class="breadcrumb-item">Create user</div>
                </div>
            </div>

            <div class="section-body">
                

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form method="POST" action="{{route('users.store')}}">
                                @csrf
                                <div class="card-header">
                                    <h4>Create User</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name"/>
                                            @error('name')                            
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror    
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                 
                                       <input id="email"
                                        type="email"
                                        class="form-control @error('email')  
                                        is-invalid                          
                                        @enderror"
                                        name="email">
                                        @error('email')                            
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text"
                                            class="form-control"
                                            name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password"
                                            class="form-control @error('password')
                                                is-invalid
                                            @enderror" name="password">
                                            @error('password')                            
                                            <div class="invalid-feedback">
                                                {{$message}}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Roles</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="admin"
                                                    class="selectgroup-input"
                                                    checked="">
                                                <span class="selectgroup-button">Admin</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="dosen"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Dosen</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="mahasiswa"
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Mahasiswa</span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Address</label>
                                        <textarea class="form-control"
                                            data-height="150"
                                            name="address"></textarea>
                                    </div>
                                    
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
