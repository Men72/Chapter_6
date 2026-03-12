<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = [
            ['name' => 'John Doe', 'age' => 20],
            ['name' => 'Jane Smith', 'age' => 22],
            ['name' => 'Emily Johnson', 'age' => 19],
        ];

        return view('index', compact('students'));
    }
}