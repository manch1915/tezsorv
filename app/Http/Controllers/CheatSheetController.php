<?php

namespace App\Http\Controllers;

use App\Models\CheatSheet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CheatSheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(): \Illuminate\Http\JsonResponse
    {
        $cheatSheets = CheatSheet::with('category')->get();

        $cheatSheets = $cheatSheets->map(function ($cheatSheet) {
            $cheatSheet->created_at = $cheatSheet->created_at->format('Y/m/d');
            $cheatSheet->category_name = $cheatSheet->category->name;
            $cheatSheet->body = implode(' ', array_slice(str_word_count($cheatSheet->body, 1), 0, 15));
            unset($cheatSheet->category);
            return $cheatSheet;
        });

        return response()->json($cheatSheets);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CheatSheet $cheatSheet): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CheatSheet $cheatSheet): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        $item = CheatSheet::find($id);
        $item->delete();

        return response()->json(['message' => 'Item deleted successfully']);
    }
}

//public function index()
//{
//    $events = Events::all()->toArray();
//    return array_reverse($events);
//}
//
//public function store(Request $req)
//{
//    $file = $req->file('image')->store('images/events');
//    $member = Events::create([
//            'title' => $req->input('title'),
//            'body' => $req->input('body'),
//            'image' => $file,
//        ]
//    );
//    return response()->json($file);
//}
//
//public function show($id)
//{
//    $event = Events::find($id);
//    return response()->json($event);
//}
//
//public function update($id, Request $request)
//{
//    $event = Events::find($id);
//    $event->update($request->all());
//    return response()->json('Events updated!');
//}
//
//public function destroy($id)
//{
//    $event = Events::find($id);
//    $event->delete();
//    return response()->json('Events deleted!');
//}
