<?php

namespace App\Http\Controllers;

use App\Models\Ortu;
use App\Models\Pelajar;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration.form');
    }

    // Handle form submissions
    public function register(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'student_phone_number' => 'required|string|max:20',
            'student_religion' => 'required|string|max:255',
            'student_date_of_birth' => 'required|date',
            'student_place_of_birth' => 'required|string|max:255',
            'current_school' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'nisn' => 'required|string|max:20|unique:students',
            'father_name' => 'required|string|max:255',
            'father_occupation' => 'required|string|max:255',
            'father_income' => 'required|numeric',
            'mother_name' => 'required|string|max:255',
            'mother_occupation' => 'required|string|max:255',
            'mother_income' => 'required|numeric',
            'parent_phone_number' => 'required|string|max:20',
        ]);

        // Create a new Student record
        $student = Pelajar::create([
            'name' => $validatedData['student_name'],
            'phone_number' => $validatedData['student_phone_number'],
            'religion' => $validatedData['student_religion'],
            'date_of_birth' => $validatedData['student_date_of_birth'],
            'place_of_birth' => $validatedData['student_place_of_birth'],
            'current_school' => $validatedData['current_school'],
            'address' => $validatedData['address'],
            'gender' => $validatedData['gender'],
            'nisn' => $validatedData['nisn'],
        ]);

        // Create a new Parent record
        $parent = Ortu::create([
            'father_name' => $validatedData['father_name'],
            'father_occupation' => $validatedData['father_occupation'],
            'father_income' => $validatedData['father_income'],
            'mother_name' => $validatedData['mother_name'],
            'mother_occupation' => $validatedData['mother_occupation'],
            'mother_income' => $validatedData['mother_income'],
            'phone_number' => $validatedData['parent_phone_number'],
        ]);

        // You can add any additional logic here, such as sending confirmation emails

        // Redirect to a success page or wherever you prefer
        return redirect('/registration/success')->with('success', 'Registration successful!');
    }

}
