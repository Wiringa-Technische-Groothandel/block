<?php

namespace WTG\Content\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use WTG\Content\Interfaces\ContentInterface as Content;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Content controller.
 *
 * @package     WTG\Content
 * @subpackage  Controllers
 * @author      Thomas Wiringa  <thomas.wiringa@gmail.com>
 */
class ContentController extends Controller
{
    /**
     * View a custom page.
     *
     * @param  Request  $request
     * @param  Content  $content
     * @param  string  $page
     *
     * @return \Illuminate\View\View
     *
     * @throws NotFoundHttpException
     */
    public function view(Request $request, Content $content, string $page)
    {
        $page = $content->type(Content::TYPE_PAGE)->where('tag', $page)->first();

        if ($page === null) {
            throw new NotFoundHttpException;
        }

        return view('content::custom-page', compact('page'));
    }
}