<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class SocialPost extends Model implements HasMedia
{
    use HasMediaTrait;
    protected $fillable = ['socialId'];
}
