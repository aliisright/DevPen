<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ArticleTag extends Pivot
{
    protected $fillable = [
      'article_id', 'tag_id',
    ];
}
