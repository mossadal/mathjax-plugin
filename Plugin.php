<?php namespace Mossadal\MathJax;

use Backend;
use Controller;
use System\Classes\PluginBase;
use October\Rain\Support\MarkdownData;
use Mossadal\ExtendMarkdown\Models\Rule;
use Mossadal\ExtendMarkdown\Classes\Hooks;
use System\Classes\SettingsManager;
use Event;
use Rainlab\Blog\Controllers\Posts as PostsController;


/**
 * MathJax Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'MathJax',
            'description' => 'Allows MathJax preview on blog posts',
            'author'      => 'Frank Wikström, Mossadal konsult och design AB',
            'icon'        => 'icon-superscript'
        ];
    }

    public function boot()
    {
        PostsController::extend(function ($controller) {
            $controller->addJs("http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML");
            $controller->addJs("/plugins/mossadal/mathjax/assets/js/mathjax.js");
        });
    }
}
