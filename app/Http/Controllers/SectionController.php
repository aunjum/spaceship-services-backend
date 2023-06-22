<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class SectionController extends Controller
{
    public function store(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:svg',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 400,
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], 400);
        }

        // Handle image upload
        $image = $request->file('image');
        $imagePath = $image->store('public/images');
        $imageUrl = asset(Storage::url($imagePath));
        // $imageUrl = asset($imagePath);

        // Create a new section
        $section = Section::create([
            'image' => $imageUrl,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return response()->json([
            'status' => 200,
            'message' => 'Record saved',
            'body' => $section,
        ]);
    }

    public function index()
    {
        $sections = Section::all();

        $sectionsWithImageUrl = $sections->map(function ($section) {
            return [
                'id' => $section->id,
                'image' => $section->image,
                'title' => $section->title,
                'description' => $section->description,
            ];
        });

        return response()->json([
            'status' => 200,
            'message' => 'Record found',
            'body' => $sectionsWithImageUrl,
        ]);
    }
    
}
