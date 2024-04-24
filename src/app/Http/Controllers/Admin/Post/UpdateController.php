<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tagsIds = $data['tag_ids'];
        unset($data['tag_ids']);

        // // store files in store folder and replace on links
        // $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        // $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);

        if (array_key_exists('preview_image', $data) || array_key_exists('main_image', $data)) {
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/images', $data['main_image']);
        }
        
        $post->update($data);

        $post->tags()->sync($tagsIds);

        return redirect()->route('admin.post.show', $post->id);
    }
}
