<?php

namespace App\Http\Resources;
use Illuminate\Support\Str;

use Illuminate\Http\Resources\Json\JsonResource;

class article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return [
        //     'slug' => Str::slug($this->$data->$request->title),
        // ];
        // $request['slug'] = Str::slug($request->title);
        return [
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'content' => $this->content,
            'author' => $this->author,
            'publish_date' => $this->publish_date,
            'draft_status' => $this->draft_status

        ];
        // $table->string('title', 255)->nullable('false')->unique();
        // $table->string('slug', 255)->nullable();//Setting slug on controller anyway...
        // $table->longText('content')->nullable('false');
        // // $table->foreignId('author_id')->constrained()->onDelete('cascade'); Not needed for this test i understood
        // $table->string('author', 255)->nullable('false');
        // $table->datetime('publish_date')->nullable();
        // $table->boolean('draft_status')->default(1);
        // $table->timestamps();
    }
}
