<?php

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Post extends \Eloquent {

    use SoftDeletingTrait;

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];



	// Don't forget to fill this array
	protected $fillable = ['title', 'content'];

    public function tags()
    {
        return $this->HasMany('Tag');
    }


    public function pubdate()
    {
        return $this->updated_at->format('d m, Y');
    }

    public static function boot()
    {
        parent::boot();

        Post::creating(function($post){

            $post->slug = Str::slug($post->title);
        });
    }

}
