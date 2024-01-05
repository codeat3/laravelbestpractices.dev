<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Documentation;

final class DocsController
{
    private const DEFAULT_REPO = 'go-get-laravel';
    private const DEFAULT_VERSION = 'master';

    private const DEFAULT_PAGE = 'Home';

    private const EXCLUDED = ['readme', 'license'];

    public function __invoke(Documentation $docs, string $repo = null, string $version = null, string $page = null)
    {
        // dd($repo, $version, $page);

        if ($page === null) {
            if ($version !== null) {
                return redirect()->route('docs', [self::DEFAULT_REPO, self::DEFAULT_VERSION, $version]);
            }

            return redirect()->route('docs', [self::DEFAULT_REPO, self::DEFAULT_VERSION, self::DEFAULT_PAGE]);
        }

        if (!$docs->exists($repo, $version, $page) || in_array($page, self::EXCLUDED)) {
            abort(404);
        }

        $sections = $docs->toc($repo, $version);
        $markdown = $docs->get($repo, $version, $page);
        $markdown = str_replace('{{version}}', $version, $markdown);
        $title = $docs->title($markdown);

        return view('docs', compact('repo', 'version', 'page', 'sections', 'title', 'markdown'));
    }
}
