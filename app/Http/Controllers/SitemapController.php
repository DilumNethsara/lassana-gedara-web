<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        // 1) Create an array of routes you want to include in the sitemap.
        //    Each item holds information like URL, last modified date, etc.
        $urls = [
            [
                'loc' => route('home'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '1.0'
            ],
            [
                'loc' => route('about'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('services'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('contact'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ],
            [
                'loc' => route('faq'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6'
            ],
            [
                'loc' => route('our_team'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6'
            ],
            [
                'loc' => route('mainQuote'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.6'
            ],
            // Services
            [
                'loc' => route('Luxury_&_Affordable_Housing_Development'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Commercial_&_Industrial_Construction'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Renovation_&_Restoration_Services'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Interior_&_Exterior_Designing'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Sustainable_&_Eco_Friendly_Construction'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Civil_Engineering_&_MEP_Services'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Vaasthu_Consulting_&_Traditional_Architecture'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Real_Estate_Investment_&_Property_Development'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Prefabricated_&_Modular_Construction'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Estimates_Design_Approvals_&_Financing_Services'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
            [
                'loc' => route('Exporting_Construction_Services_&_Expertise'),
                'lastmod' => Carbon::now()->tz('UTC')->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.7'
            ],
        ];

        // 2) Render the sitemap XML by loading a Blade view and passing the array of URLs.
        $content = view('sitemap', compact('urls'));

        // 3) Return the XML with the correct header.
        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }
}
