# Laravel-Scaffolding-Presets For Laravel 5.5 and Up
Laravel 5.5 Frontend CSS Framework and JS Framework Scaffolding Presets

## About The Package
Laravel 5.5 comes with `artisan preset [preset name]` command to quickly scaffold your frontend application using one of your favorite CSS and JS frameworks. By default, it has a built in presets for Twitter Bootstrap, Vue.js, React and blank preset.

I have tried to merge the Zurb Foundation preset but was denied during pull request. Currently Laravel won't add any more preset than it have right now due to the fact that it may bloat the core package. So I thought of unofficial way to integrate this. This package have all the core presets plus additional frameworks (currently Zurb Foundation). More will be added later.

## How to Use
1. Download this package.
2. Fresh install Laravel with `laravel new <your_app_name>`.
3. CD to `<your_app_name>` folder.
4. try `php artisan --help preset`. You will see something like this ` The preset type (none, bootstrap, vue, react)`.
5. copy `vendor` folder from this package and overwrite all files on your fresh install.
6. copy `resources` folder from this package and overwrite to replace default `welcome.blade.php` with this test welcoe page.
7. Try again `php artisan --help preset`. Now you will see ` The preset type (none, bootstrap, vue, react, foundation, bulma)`.
8. That's it! now do `php artisan preset bulma` then `npm install` then `npm run dev` then `php artisan serve` and point your browser to `http://127.0.0.1:8000/` to check preset.
9. **NOTE**: This is unofficial way to use the preset, so use it on your own risk. However I have tested it thoroughly before adding it here. I have modified the core files for additional check and cleanup. More presets to come if I have helping hands.


## Framework and Versions Included
1. none - nothing
2. bootstrap - Bootstrap SASS 3.3.7 & Jquery 3.3.1
3. foundation - Zurb Foundation for sites SASS 6.4.1 & Jquery 2.2.4
4. vue - Vue 2.1.10
5. react - React 15.4.2
6. bulma - Bulma 0.4.3

## How to Contribute

1. Fresh install Laravel
2. Install your favorite framework and remove the unnecessary ones. This includes few `npm install` and edit `package.json` files manually. Take note of what is removed and what is added.
3. Check if you need to copy some setting files to convenient location for frequent uses and include that on your main `app.scss` file. For example, `_variables.scss` (for bootstrap) or `_settings.scss` (for foundation) to `resource/scss`. This includes changing reference made by that file properly also because originally they are installed inside `node_modules/<package_name>`. For example, follow this tutorial http://somethingnewtutorial.blogspot.com/2017/07/using-foundation-6-with-laravel-5.html. Final modified and working file of this type is good candidate for storing inside `<preset_name>-stubs` folder.
4. Create your preset file (like `Foundation.php`) and do the necessary housekeeping stuffs.
5. Basically `PresentCommand.php` is the main handler. Add your handle in this file and update the preset array.
6. That's it.
7. You can fork this repo, create a branch, add necessary files and do the pull request.


Hope this helps
Thanks!
