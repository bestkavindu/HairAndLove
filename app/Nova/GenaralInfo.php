<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Http\Requests\NovaRequest;

class GenaralInfo extends Resource
{
    public static $group = 'Settings';
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\GenaralInfo>
     */
    public static $model = \App\Models\GenaralInfo::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('address'),
            Text::make('phone'),
            Text::make('email'),
            Text::make('fb_link'),
            Text::make('tw_link'),
            Text::make('ig_link'),
            Image::make('slider_1')->disk('public')->path('/images/slider')->help('Image Size : 1920 X 1080 '),
            Image::make('slider_2')->disk('public')->path('/images/slider')->help('Image Size : 1920 X 1080 '),
            Markdown::make('slider_main_content'),
            Markdown::make('slider_sub_content'),
            Markdown::make('home_about'),
            Image::make('home_about_img_1')->disk('public')->path('/images/home') ->help('Image Size : 1 : 1 '),
            Image::make('home_about_img_2')->disk('public')->path('/images/home') ->help('Image Size : 1 : 1 '),
            // about
            Image::make('about_cover')->disk('public')->path('/images/about') ->help('Image Size : 1920 X 1080'),
            Image::make('about_main_img_1')->disk('public')->path('/images/about') ->help('Image Size : 1 : 1 '),
            Image::make('about_main_img_2')->disk('public')->path('/images/about') ->help('Image Size : 1 : 1 '),
            Markdown::make('main_about'),
            // service
            Image::make('service_cover')->disk('public')->path('/images/service') ->help('Image Size : 1920 X 1080'),
            Image::make('service_main_img_1')->disk('public')->path('/images/service') ->help('Image Size : 1 : 1 '),
            Image::make('service_main_img_2')->disk('public')->path('/images/service') ->help('Image Size : 1 : 1 '),
            Markdown::make('main_service'),

            Image::make('products_cover')->disk('public')->path('/images/product') ->help('Image Size : 1920 X 1080'),



            Markdown::make('desc'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
