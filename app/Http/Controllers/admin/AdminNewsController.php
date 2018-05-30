<?php


namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Http\Requests\NewsEditRequest;
use App\Http\Requests\NewsRequest;
use App\News;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = News::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.news.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $input = $request->all();

        if($file = $request->file('photo_id')){

            $name = time() . $file->getClientOriginalName();

            $file->move('images/uploads', $name);

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo->id;

        }

        $input['user_id'] = \Auth::user()->id;

        $input['title'] = ucwords(trim($input['title']));

        News::create($input);

        return redirect('admin/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= News::findOrFail($id);

        return view('admin.news.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = News::findOrFail($id);

        return view('admin.news.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsEditRequest $request, $id)
    {
        $post = News::findOrFail($id);

        $input = $request->all();

        if($file = $request->file('photo_id')){

            unlink(public_path() . $post->photo->file);

            $name = time() . $file->getClientOriginalName();
            $file->move('images/uploads', $name);
            $photo = Photo::create(['file' => $name]);
            $input['photo_id'] = $photo->id;

        }
        $input['title'] = ucwords(trim($input['title']));

        $post->update($input);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = News::findOrFail($id);

        unlink(public_path() . $post->photo->file);

        $post->delete();

        Session::flash('post_deleted','The post has been deleted');

        return redirect('/admin/news');
    }
}
