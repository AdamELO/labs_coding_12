<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
    public function author() {
        return $this->belongsTo( Author::class );
    }

    public function commentaires() {
        return $this->hasMany( Commentaire::class );
    }

    public function tags() {
        return $this->belongsToMany( Tag::class, 'tag_articles' );
    }

    public function categories() {
        return $this->belongsToMany( Categorie::class, 'categorie_articles' );
    }
}
