<?php

namespace App\Http\Middleware;

use App\Models\BlogView;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TrackBlogView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    	$blog = $request->route('blog');

    	// dd($blog);
    	// dd($request->route('id'));
    	// dd($request->route('blog'));

        if ($blog) {
            $ipAddress = $request->ip();
            // dd($ipAddress);

            // Check if the IP address has already been logged for this post
            $existingView = BlogView::where('blog_id', $blog->id)
                                    ->where('ip_address', $ipAddress)
                                    ->first();

            if (!$existingView) {
                // Log the view
                BlogView::create([
                    'blog_id' => $blog->id,
                    'ip_address' => $ipAddress,
                ]);

                // Increment the view count
                $blog->increment('view_count');
            }
        }

        return $next($request);
    }
}
