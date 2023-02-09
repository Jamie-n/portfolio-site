<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{

    const TECHNOLOGY = 'technology';
    const LANGUAGE_FRAMEWORK = 'lang_framework';

    protected $fillable = [
        'name',
        'img_path',
        'img_alt_text',
        'description',
        'years_experience',
        'type'
    ];

    static function createTechnology(array $attributes = [])
    {
        self::create(array_merge($attributes, ['type' => self::TECHNOLOGY]));
    }

    static function createLanguageFramework(array $attributes = [])
    {
        self::create(array_merge($attributes, ['type' => self::LANGUAGE_FRAMEWORK]));
    }

    public function scopeTechnologies(Builder $builder): Builder
    {
        return $builder->where('type', '=', self::TECHNOLOGY);
    }

    public function scopeLanguages(Builder $builder): Builder
    {
        return $builder->where('type', '=', self::LANGUAGE_FRAMEWORK);
    }

    public function getImgAssetPathAttribute($value)
    {
        return asset("images/{$this->img_path}");
    }
}
