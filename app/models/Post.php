<?php

class Post extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];


    public static function boot()
    {
        parent::boot();

        Post::creating(function($post){

            $post->slug = Str::slug($post->title);
        });
    }

}
