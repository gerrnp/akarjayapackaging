<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModels extends Model
{
    protected $table      = 'blog_ajp';
    protected $primaryKey = 'id_blog_ajp';
    protected $useTimestamps = true;
    protected $allowedFields = ['head_blog_ajp', 'slug_blog_ajp', 'head_blog_ajp', 'content_blog_ajp', 'author_blog_ajp', 'img_blog_ajp'];
}
