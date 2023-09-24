<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $title
 * @property $author
 * @property $year_of_publication
 * @property $genre
 * @property $loans_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Loan $loan
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'title' => 'required',
		'author' => 'required',
		'year_of_publication' => 'required',
		'genre' => 'required',
		'loans_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','author','year_of_publication','genre','loans_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function loan()
    {
        return $this->hasOne('App\Models\Loan', 'id', 'loans_id');
    }
    

}
