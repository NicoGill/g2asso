<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Annonce;
use App\Categorie;

class AnnonceController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $annonces = Annonce::where('user_id', Auth::user()->id)->paginate(10);
    $categories = Categorie::all();

    return view('annonces.index', compact('annonces', 'categories'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $categories = Categorie::all();
    return view('annonces.create', compact('categories'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    // validate
    // persist
    //return

    $this->validate($request, [
      'title'     => 'required',
      'categorie'  => 'required',
      'description'  => 'required',
      'content'   => 'required'
    ]);

    $slug = str_slug($request->input('title'), '-');

    $annonce = new Annonce([
      'title'     => $request->input('title'),
      'slug'      => $slug,
      'user_id'   => Auth::user()->id,
      'categorie_id'  => $request->input('categorie'),
      'description'  => $request->input('description'),
      'content'   => $request->input('content'),
      'status'    => 'publish',
      'comments'   => true,
    ]);

    $annonce->save();

    // $mailer->sendTicketInformation(Auth::user(), $ticket);

    return redirect()->back()->with("status", "L\'annonce : $annonce->title à bien été publié.");

  }

  /**
   * Display the specified resource.
   *
   * @param  int  $slug
   * @return Response
   */
  public function show($slug)
  {
    $annonce = Annonce::with('user')->where('slug', $slug)->firstOrFail();

    $categorie = $annonce->categorie;

    return view('annonces.show', compact('annonce', 'categorie'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {

  }

}

?>
