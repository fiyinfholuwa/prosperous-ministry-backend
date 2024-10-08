<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\PostCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function admin_category_view(){
        $category_types = PostCategory::all();
        return view('admin.category', compact('category_types'));
    }

    public function admin_category_add(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        try {
            $data = [
                'name' => $request->name,
                'status' => $request->status,
            ];

             PostCategory::create($data);

            return GeneralController::redirectWithMessage(true, 'Category Successfully Saved', 'Category Could not be saved', 'back');
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function admin_category_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        try {
            $category = PostCategory::findOrFail($id);

            $data = [
                'name' => $request->name,
                'status' => $request->status,
            ];

             $category->update($data);

            return GeneralController::redirectWithMessage(true, 'Category Successfully Updated', 'No Changes Made', 'back');
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'An error occurred: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function admin_category_delete($id){
        $result = PostCategory::findOrFail($id)->destroy($id);
        return GeneralController::redirectWithMessage($result, 'Category  Successfully Deleted', "Category Could not be Deleted", 'back');
    }



    public function admin_blog_view(){
        $categories = PostCategory::all();
        return view('admin.blog_view', compact('categories'));
    }

    public function admin_add_blog(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'read_time' => 'required',
            'body' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);

        $path = null;

        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $extension = $attachment->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/blog/';

            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $attachment->move($directory, $filename);
            $path = $directory . $filename;
        }

        $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', $request->title));

        $data = [
            'slug' => $slug,
            'title' => $request->title,
            'userid' => Auth::user()->id,
            'read_time' => $request->read_time,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'image' => $path,
        ];

         Blog::create($data);

        return GeneralController::redirectWithMessage(true, 'Blog Successfully Saved', 'Blog Could not be saved', 'back');
    }

    public function admin_blog_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'read_time' => 'required',
            'body' => 'required',
            'status' => 'required',
            'category_id' => 'required',
        ]);

        $blog = Blog::findOrFail($id);
        $path = $blog->image;

        if ($request->hasFile('image')) {
            $attachment = $request->file('image');
            $extension = $attachment->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/blog/';

            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            $attachment->move($directory, $filename);
            $path = $directory . $filename;
        }

        $slug = strtolower(preg_replace('/[^a-z0-9]+/', '-', $request->title));

        $data = [
            'slug' => $slug,
            'title' => $request->title,
            'userid' => Auth::user()->id,
            'read_time' => $request->read_time,
            'body' => $request->body,
            'category_id' => $request->category_id,
            'status' => $request->status,
            'image' => $path,
        ];

        $result = $blog->update($data);
        return GeneralController::redirectWithMessage($result, 'Blog Successfully Updated', 'No Changes Made', 'admin.blog.all');
    }

    public function admin_blog_all(){
        $blogs = Blog::all();
        return view('admin.blog_all', compact('blogs'));
    }

    public function admin_blog_edit($id){
        $blog = Blog::findOrFail($id);
        $categories = PostCategory::all();
        return view('admin.blog_edit', compact('blog', 'categories'));
    }

    public function admin_blog_delete($id){
        Blog::findOrFail($id)->delete();
        return GeneralController::redirectWithMessage(true, 'Blog  Successfully Deleted', "Blog Could not be Deleted", 'back');
    }

    public function admin_comment_all()
    {
        $comments = Comment::all();
        return view('admin.comment_all', compact('comments'));
    }

    public function admin_comment_delete($id)
    {
        $result = Comment::findOrFail($id);
        return GeneralController::redirectWithMessage(true, 'Comment Successfully Deleted', "Comment Could not be Deleted", 'back');

    }

    public function admin_testimonial_view()
    {
        return view('admin.testimonial_view');
    }

    public function admin_testimonial_save(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'type' => 'required'
        ]);
        if ($request->type =='link' && $request->link == ""){
            $notification = array(
                'message' => 'it required that you input the link when you choose option link',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        if ($request->type =='text' && $request->body == ""){
            $notification = array(
                'message' => 'it required that you input the text when you choose option text',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/testimonials/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $image->move($directory, $filename);
        $path = $directory . $filename;
        $testimonial = new Testimonial;
        $testimonial->full_name = $request->full_name;
        $testimonial->image = $path;
        $testimonial->link = $request->link;
        $testimonial->type = $request->type;
        $testimonial->body = $request->body;
        $testimonial->save();
        $notification = array(
            'message' => 'Testimonial Successfully Added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_testimonial_all()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial_all', compact('testimonials'));
    }

    public function admin_testimonial_edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial_edit', compact( 'testimonial'));
    }


    public function admin_testimonial_update(Request $request, $id)
    {
        $request->validate([
            'full_name' => 'required',
            'type' => 'required'
        ]);

        if ($request->type =='link' && $request->link == ""){
            $notification = array(
                'message' => 'it required that you input the link when you choose option link',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
        if ($request->type =='text' && $request->body == ""){
            $notification = array(
                'message' => 'it required that you input the text when you choose option text',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

        $testimonial = Testimonial::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/testimonials/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path = $directory . $filename;
        } else {
            $path = $testimonial->image;
        }
        $testimonial->full_name = $request->full_name;
        $testimonial->image = $path;
        $testimonial->link = $request->link;
        $testimonial->type = $request->type;
        $testimonial->body = $request->body;
        $testimonial->save();
        $notification = array(
            'message' => 'Testimonial Successfully Updated',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.testimonial.all')->with($notification);
    }

    public function admin_testimonial_delete($id)
    {
        $testimony = Testimonial::findOrFail($id);
        $testimony->delete();
        $notification = array(
            'message' => 'Testimonial Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
