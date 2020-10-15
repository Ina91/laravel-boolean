<?php

namespace App\Http\Controllers;

class StudentController extends Controller {
    protected $students;

    public function __construct() {
        $this->students = config('students');
    }

    public function studenti() {
        $data = $this->students;
        return view('studenti', compact('data'));
    }

    public function show($id) {
        if (!array_key_exists($id, $this->students)) {
            abort(404);
        }

        $student = $this->students[$id];
        return view('show', compact('student'));
    }

    // con slug
    public function slug($nome) {
        foreach ($this->students as $studente) {
            if ($studente['slug'] == $nome) {
                $student = $studente;
            }
        }

        if (isset($student)) {
            return view('show', compact('student'));
        } else {
            abort(404);
        }
    }
}
