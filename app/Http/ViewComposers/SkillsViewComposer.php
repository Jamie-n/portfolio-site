<?php

namespace App\Http\ViewComposers;

use App\Models\Skill;
use Illuminate\View\View;

class SkillsViewComposer
{
    public function compose(View $view)
    {
        $languages = Skill::languages()->get();
        $technologies = Skill::technologies()->get();

        return $view->with('languagesAndFrameworks', $languages)->with('technologies', $technologies);
    }
}
