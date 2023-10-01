@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Form Edit User</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Users</a></div>
                    <div class="breadcrumb-item"><a href="#">User</a></div>
                    <div class="breadcrumb-item">Edit user</div>
                </div>
            </div>

            <div class="section-body">
                

                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <form method="POST" action="{{route('users.update', $user)}}">
                                @csrf
                                @method('PUT')
                                <div class="card-header">
                                    <h4>Edit User</h4>
                                </div>
                                <input type="hidden"
                                class="form-control "
                                name="id"/>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{$user->name}}"/>
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
                                        name="email" value="{{$user->email}}">
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
                                            name="phone" value="{{$user->phone}}">
                                    </div>
                                    {{-- <div class="form-group">
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
                                    </div> --}}
                                    <div class="form-group mb-0">
                                        <label>Roles</label>
                                        <div class="selectgroup w-100">
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="admin"
                                                    class="selectgroup-input"
                                                    @if ($user->roles=="admin")
                                                        checked
                                                    @endif
                                                    >
                                                <span class="selectgroup-button">Admin</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="dosen"
                                                    @if ($user->roles=="dosen")
                                                        checked
                                                    @endif
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Dosen</span>
                                            </label>
                                            <label class="selectgroup-item">
                                                <input type="radio"
                                                    name="roles"
                                                    value="mahasiswa"
                                                    @if ($user->roles=="mahasiswa")
                                                        checked
                                                    @endif
                                                    class="selectgroup-input">
                                                <span class="selectgroup-button">Mahasiswa</span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Address</label>
                                        <textarea class="form-control"
                                            data-height="150"
                                            name="address">{{$user->address}}</textarea>
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
