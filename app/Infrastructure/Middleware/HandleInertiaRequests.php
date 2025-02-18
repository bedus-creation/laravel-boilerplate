<?php

namespace App\Infrastructure\Middleware;

use App\Infrastructure\Support\Inertia\InertiaData;
use App\Infrastructure\Support\Inertia\InvalidInertiaDataSharableClassException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Inertia\Middleware;

/**
 * Class HandleInertiaRequests
 *
 * @package App\Infrastructure\Middleware
 */
class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     *
     * @param Request $request
     *
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @param Request $request
     *
     * @return array
     * @throws InvalidInertiaDataSharableClassException
     * @throws BindingResolutionException
     */
    public function share(Request $request)
    {
        return array_merge(parent::share($request), (new InertiaData())->get());
    }
}
