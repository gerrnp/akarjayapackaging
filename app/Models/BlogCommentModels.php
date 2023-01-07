<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogCommentModels extends Model
{
    protected $table      = 'blog_comment_ajp';
    protected $primaryKey = 'id_blog_comment';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_blog_ajp', 'name_user_blog_comment_ajp', 'email_user_blog_comment_ajp', 'blog_comment_ajp'];
}
