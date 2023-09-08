<!-- resources/views/registration/form.blade.php -->

@extends('layouts.login')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registration</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('registration.register') }}">
                        @csrf

                        <!-- Student's Biodata Section -->
                        <h2>Prospective Student Biodata</h2>
                        <hr>

                        <!-- Student Name -->
                        <div class="form-group row">
                            <label for="student_name" class="col-md-4 col-form-label text-md-right">Name</label>
                            <div class="col-md-6">
                                <input id="student_name" type="text"
                                    class="form-control @error('student_name') is-invalid @enderror" name="student_name"
                                    value="{{ old('student_name') }}" required autofocus>
                                @error('student_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Student Phone Number -->
                        <div class="form-group row">
                            <label for="student_phone_number" class="col-md-4 col-form-label text-md-right">Phone
                                Number</label>
                            <div class="col-md-6">
                                <input id="student_phone_number" type="text"
                                    class="form-control @error('student_phone_number') is-invalid @enderror"
                                    name="student_phone_number" value="{{ old('student_phone_number') }}" required>
                                @error('student_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Student Religion -->
                        <div class="form-group row">
                            <label for="student_religion" class="col-md-4 col-form-label text-md-right">Religion</label>
                            <div class="col-md-6">
                                <input id="student_religion" type="text"
                                    class="form-control @error('student_religion') is-invalid @enderror"
                                    name="student_religion" value="{{ old('student_religion') }}" required>
                                @error('student_religion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Student Date of Birth -->
                        <div class="form-group row">
                            <label for="student_date_of_birth" class="col-md-4 col-form-label text-md-right">Date of
                                Birth</label>
                            <div class="col-md-6">
                                <input id="student_date_of_birth" type="date"
                                    class="form-control @error('student_date_of_birth') is-invalid @enderror"
                                    name="student_date_of_birth" value="{{ old('student_date_of_birth') }}" required>
                                @error('student_date_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Student Place of Birth -->
                        <div class="form-group row">
                            <label for="student_place_of_birth" class="col-md-4 col-form-label text-md-right">Place of
                                Birth</label>
                            <div class="col-md-6">
                                <input id="student_place_of_birth" type="text"
                                    class="form-control @error('student_place_of_birth') is-invalid @enderror"
                                    name="student_place_of_birth" value="{{ old('student_place_of_birth') }}" required>
                                @error('student_place_of_birth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Current School -->
                        <div class="form-group row">
                            <label for="current_school" class="col-md-4 col-form-label text-md-right">Current School</label>
                            <div class="col-md-6">
                                <input id="current_school" type="text"
                                    class="form-control @error('current_school') is-invalid @enderror" name="current_school"
                                    value="{{ old('current_school') }}" required>
                                @error('current_school')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text"
                                    class="form-control @error('address') is-invalid @enderror" name="address"
                                    value="{{ old('address') }}" required>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Gender -->
                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">Gender</label>
                            <div class="col-md-6">
                                <select id="gender" class="form-control @error('gender') is-invalid @enderror"
                                    name="gender" required>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- NISN (National Student Identification Number) -->
                        <div class="form-group row">
                            <label for="nisn" class="col-md-4 col-form-label text-md-right">NISN</label>
                            <div class="col-md-6">
                                <input id="nisn" type="text"
                                    class="form-control @error('nisn') is-invalid @enderror" name="nisn"
                                    value="{{ old('nisn') }}" required>
                                @error('nisn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Parent's Biodata Section -->
                        <h2>Parent's Biodata</h2>
                        <hr>

                        <!-- Father's Name -->
                        <div class="form-group row">
                            <label for="father_name" class="col-md-4 col-form-label text-md-right">Father's Name</label>
                            <div class="col-md-6">
                                <input id="father_name" type="text"
                                    class="form-control @error('father_name') is-invalid @enderror" name="father_name"
                                    value="{{ old('father_name') }}" required>
                                @error('father_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Father's Occupation -->
                        <div class="form-group row">
                            <label for="father_occupation" class="col-md-4 col-form-label text-md-right">Father's
                                Occupation</label>
                            <div class="col-md-6">
                                <input id="father_occupation" type="text"
                                    class="form-control @error('father_occupation') is-invalid @enderror"
                                    name="father_occupation" value="{{ old('father_occupation') }}" required>
                                @error('father_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Father's Income -->
                        <div class="form-group row">
                            <label for="father_income" class="col-md-4 col-form-label text-md-right">Father's
                                Income</label>
                            <div class="col-md-6">
                                <input id="father_income" type="text"
                                    class="form-control @error('father_income') is-invalid @enderror"
                                    name="father_income" value="{{ old('father_income') }}" required>
                                @error('father_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Mother's Name -->
                        <div class="form-group row">
                            <label for="mother_name" class="col-md-4 col-form-label text-md-right">Mother's Name</label>
                            <div class="col-md-6">
                                <input id="mother_name" type="text"
                                    class="form-control @error('mother_name') is-invalid @enderror" name="mother_name"
                                    value="{{ old('mother_name') }}" required>
                                @error('mother_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Mother's Occupation -->
                        <div class="form-group row">
                            <label for="mother_occupation" class="col-md-4 col-form-label text-md-right">Mother's
                                Occupation</label>
                            <div class="col-md-6">
                                <input id="mother_occupation" type="text"
                                    class="form-control @error('mother_occupation') is-invalid @enderror"
                                    name="mother_occupation" value="{{ old('mother_occupation') }}" required>
                                @error('mother_occupation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Mother's Income -->
                        <div class="form-group row">
                            <label for="mother_income" class="col-md-4 col-form-label text-md-right">Mother's
                                Income</label>
                            <div class="col-md-6">
                                <input id="mother_income" type="text"
                                    class="form-control @error('mother_income') is-invalid @enderror"
                                    name="mother_income" value="{{ old('mother_income') }}" required>
                                @error('mother_income')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Parent's Phone Number -->
                        <div class="form-group row">
                            <label for="parent_phone_number" class="col-md-4 col-form-label text-md-right">Parent's Phone
                                Number</label>
                            <div class="col-md-6">
                                <input id="parent_phone_number" type="text"
                                    class="form-control @error('parent_phone_number') is-invalid @enderror"
                                    name="parent_phone_number" value="{{ old('parent_phone_number') }}" required>
                                @error('parent_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
