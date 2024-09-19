<?php

namespace App\Http\Controllers;

use App\Models\Police;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PoliceController extends Controller
{

    public function index()
    {
        // Get all records from the Police model
        $polices = Police::all();

        // Pass the data to the index view
        return view('polices.index', ['polices' => $polices]);
    }
    //
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'client-num' => 'required|string|max:255',
            'police-number' => 'required|string|max:255',
            'raison-sociale' => 'required|string|max:255',
            'addresse' => 'required|string|max:255',
            'telephone1' => 'required|string|max:255',
            'telephone2' => 'nullable|string|max:255',
            'fax' => 'nullable|string|max:255',
            'telex' => 'nullable|string|max:255',
            'code_activite' => 'nullable|string|max:255',
            'dirigeant' => 'nullable|string|max:255',
            'fonction' => 'nullable|string|max:255',
            'statut' => 'nullable|string|max:255',
            'date-souscription' => 'required|date',
            'date-fin' => 'required|date',
            'file-upload' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:10240', // Max file size 10MB
        ]);

        // Handle file upload
        if ($request->hasFile('file-upload')) {
            $filePath = $request->file('file-upload')->store('uploads', 'public'); // Store in the 'uploads' folder within the 'public' directory
        } else {
            $filePath = null;
        }

        // Create the Police record
        Police::create([
            'client_num' => $validatedData['client-num'],
            'police_number' => $validatedData['police-number'],
            'raison_sociale' => $validatedData['raison-sociale'],
            'addresse' => $validatedData['addresse'],
            'telephone1' => $validatedData['telephone1'],
            'telephone2' => $validatedData['telephone2'],
            'fax' => $validatedData['fax'],
            'telex' => $validatedData['telex'],
            'code_activite' => $validatedData['code_activite'],
            'dirigeant' => $validatedData['dirigeant'],
            'fonction' => $validatedData['fonction'],
            'statut' => $validatedData['statut'],
            'date_souscription' => $validatedData['date-souscription'],
            'date_fin' => $validatedData['date-fin'],
            'file_path' => $filePath, // Save file path if uploaded
        ]);

        // Redirect or return success response
        return redirect()->route('polices');
    }

    public function edit($id)
    {
        $police = Police::findOrFail($id);
        return view('polices.edit', compact('police'));
    }

    public function update(Request $request, $id)
{
    // Find the Police record by ID
    $police = Police::findOrFail($id);

    // Validate the incoming request
    $validatedData = $request->validate([
        'client-num' => 'required|string|max:255',
        'police-number' => 'required|string|max:255',
        'raison-sociale' => 'required|string|max:255',
        'addresse' => 'required|string|max:255',
        'telephone1' => 'required|string|max:255',
        'telephone2' => 'nullable|string|max:255',
        'fax' => 'nullable|string|max:255',
        'telex' => 'nullable|string|max:255',
        'code_activite' => 'nullable|string|max:255',
        'dirigeant' => 'nullable|string|max:255',
        'fonction' => 'nullable|string|max:255',
        'statut' => 'nullable|string|max:255',
        'date-souscription' => 'required|date',
        'date-fin' => 'required|date',
        'file-upload' => 'nullable|file|mimes:jpg,jpeg,png,gif|max:10240', // Max file size 10MB
    ]);

    // Handle file upload
    if ($request->hasFile('file-upload')) {
        // Delete the old file if it exists
        if ($police->file_path) {
            Storage::disk('public')->delete($police->file_path);
        }
        $filePath = $request->file('file-upload')->store('uploads', 'public'); // Store in the 'uploads' folder within the 'public' directory
    } else {
        $filePath = $police->file_path; // Keep the old file path if no new file is uploaded
    }

    // Update the Police record
    $police->update([
        'client_num' => $validatedData['client-num'],
        'police_number' => $validatedData['police-number'],
        'raison_sociale' => $validatedData['raison-sociale'],
        'addresse' => $validatedData['addresse'],
        'telephone1' => $validatedData['telephone1'],
        'telephone2' => $validatedData['telephone2'],
        'fax' => $validatedData['fax'],
        'telex' => $validatedData['telex'],
        'code_activite' => $validatedData['code_activite'],
        'dirigeant' => $validatedData['dirigeant'],
        'fonction' => $validatedData['fonction'],
        'statut' => $validatedData['statut'],
        'date_souscription' => $validatedData['date-souscription'],
        'date_fin' => $validatedData['date-fin'],
        'file_path' => $filePath, // Save file path if uploaded
    ]);

    // Redirect or return success response
    return redirect()->route('polices');
}

    public function destroy($id)
    {
        $police = Police::findOrFail($id);
        $police->delete();

        return redirect()->route('polices')->with('success', 'Police deleted successfully!');
    }
}
