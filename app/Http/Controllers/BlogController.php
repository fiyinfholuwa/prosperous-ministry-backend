<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\EventAttendee;
use App\Models\PostCategory;
use App\Models\ProgramEvent;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    public function admin_event_view()
    {
        return view('admin.event_view');
    }

    public function admin_event_edit($id)
    {
        $event = ProgramEvent::findOrFail($id);
        return view('admin.event_edit', compact('event'));
    }

    public function admin_event_save(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $baseUrl = request()->getSchemeAndHttpHost();
        $url_slug = strtolower($request->title);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);

        $image = $request->file('image');
        $extension = $image->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $directory = 'uploads/event/';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }
        $image->move($directory, $filename);
        $path = $directory . $filename;
        $new_post = new ProgramEvent();
        $new_post->title = $request->title;
        $new_post->slug = GeneralController::slugify($request->title);
        $new_post->body = $request->body;
        $new_post->image = $path;
        $new_post->start_date = $request->start_date;
        $new_post->end_date = $request->end_date;
        $new_post->time = $request->time;
        $new_post->address = $request->address;
        $new_post->save();
        $notification = array(
            'message' => 'Event Successfully added',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function admin_event_all()
    {
        $events = ProgramEvent::all();
        return view('admin.event_all', compact('events'));
    }

    public function admin_event_update(Request $request, $id)
    {

        $new_post = ProgramEvent::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $baseUrl = request()->getSchemeAndHttpHost();
        $url_slug = strtolower($request->title);
        $label_slug= preg_replace('/\s+/', '-', $url_slug);

        if ($request->has('image')){
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $directory = 'uploads/event/';
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $path = $directory . $filename;
        }else{
            $path =  $new_post->image;
        }
        $new_post->title = $request->title;
        $new_post->slug = GeneralController::slugify($request->title);
        $new_post->body = $request->body;
        $new_post->image = $path;
        $new_post->start_date = $request->start_date;
        $new_post->end_date = $request->end_date;
        $new_post->time = $request->time;
        $new_post->address = $request->address;
        $new_post->save();
        $notification = array(
            'message' => 'Event Successfully added',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.event.all')->with($notification);
    }


    public function admin_event_delete($id)
    {
        $event = ProgramEvent::findOrFail($id);
        $event->delete();
        $notification = array(
            'message' => 'Event Successfully Deleted',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    public function admin_attendee_report(Request $request)
    {
        ini_set('max_execution_time', 0);

        $dateFrom = Carbon::createFromFormat('Y-m-d', $request->date_from)->startOfDay();
        $dateTo = Carbon::createFromFormat('Y-m-d', $request->date_to)->endOfDay();
        $type = $request->event_id;

        $query = EventAttendee::whereBetween('created_at', [$dateFrom, $dateTo]);
        if (!empty($type)) {
            $query->where('event_id', $type);
        }

        $data = $query->get();

        $excelContent = "SN,Full Name,Email, Event Title,  Date Created\n"; // Header row
        $i = 0;

        foreach ($data as $item) {
            $i++;
            $event_info = ProgramEvent::where('id', $item->event_id)->first();

            $excelContent .= "$i,{$item->full_name},{$item->email},{$item->phone},{$event_info->title},{$item->created_at}\n";
        }
        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=event_attendee_download.csv",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );
        return response()->stream(
            function () use ($excelContent) {
                echo $excelContent;
            },
            200,
            $headers
        );

    }

    public function admin_change_password(){
        return view('admin.change_password');
    }

    public function user_password_change(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (Hash::check($request->old_password, $user->password)) {
            $user->password = Hash::make($request->new_password);
            $user->save();
            $notification = array(
                'message' => 'Password Changed Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'message' => 'Incorrect Password, Please try again.',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }

    }

}
