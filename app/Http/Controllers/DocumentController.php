<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index(Document $document)
    {
        return view('documents.show')->withDocument($document);
    }
}
