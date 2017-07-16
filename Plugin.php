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
     * @var array   Require the RainLab.Blog plugin
     */
    public $require = ['RainLab.Blog'];

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


    /**
     * Add Mathjax dependencies to the PostsController
     */
    public function boot()
    {
        PostsController::extend(function ($controller) {
            $controller->addJs("//cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.1/MathJax.js?config=TeX-AMS-MML_HTMLorMML");
            $controller->addJs("/plugins/mossadal/mathjax/assets/js/mathjax.js");
        });
    }
}
