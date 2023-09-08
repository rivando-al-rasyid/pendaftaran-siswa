@extends('layouts.app') <!-- Assuming you have a master layout, modify as needed -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Registration') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('registration') }}">
                            @csrf

                            <!-- Student's Biodata Section -->
                            <h2>{{ __('Prospective Student Biodata') }}</h2>
                            <hr>
                            <div class="form-group row">
                                <label for="student_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
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

                            <!-- Add more student fields here -->

                            <!-- Parent's Biodata Section -->
                            <h2>{{ __('Parent\'s Biodata') }}</h2>
                            <hr>
                            <div class="form-group row">
                                <label for="father_name"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Father\'s Name') }}</label>
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

                            <!-- Add more parent fields here -->

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
