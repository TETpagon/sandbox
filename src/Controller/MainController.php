<?php


namespace App\Controller;


use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @throws Exception
     */
    public function number()
    {
        $blocks = [
            [
                'name' => 'html_start',
                'describe' => 'Allows to add additional attributes to the `html` tag (like `ng-app` for Angular)',
            ],
            [
                'name' => 'title',
                'describe' => '    Defines the `title` and defaults to the contents of the block `page_title` '
            ],
            [
                'name' => 'stylesheets',
                'describe' => '    Defines all stylesheet tags that will be embedded in the `head` section '
            ],
            [
                'name' => 'head',
                'describe' => '    additional tags that go into the `head` section '
            ],
            [
                'name' => 'body_start',
                'describe' => '    Can be used to add additional attributes in the `body` tag (like `ng-app` for Angular) '
            ],
            [
                'name' => 'after_body_start',
                'describe' => '    comes right after the opening `body` tag '
            ],
            [
                'name' => 'logo_path',
                'describe' => '    The href value of `a.logo` '
            ],
            [
                'name' => 'logo_mini',
                'describe' => '    Contents of `.logo-mini` '
            ],
            [
                'name' => 'logo_large',
                'describe' => '    Contents of `.logo-lg` '
            ],
            [
                'name' => 'navbar_toggle',
                'describe' => '    Renders the `.sidebar-toggle` button '
            ],
            [
                'name' => 'navbar_messages',
                'describe' => '    Renders the `messages` component '
            ],
            [
                'name' => 'navbar_notifications',
                'describe' => '    Renders the `notifications` component '
            ],
            [
                'name' => 'navbar_tasks',
                'describe' => '    Renders the `tasks` component '
            ],
            [
                'name' => 'navbar_user',
                'describe' => '    Renders the `user` component '
            ],
            [
                'name' => 'navbar_control_sidebar_toggle',
                'describe' => '    Renders the toggle for the `control_sidebar` (if enabled) '
            ],
            [
                'name' => 'sidebar_user',
                'describe' => '    Renders the `userPanel` component '
            ],
            [
                'name' => 'sidebar_search',
                'describe' => '    Renders the `searchPanel` component '
            ],
            [
                'name' => 'sidebar_nav',
                'describe' => '    Renders the `menu` component _or_ includes `@AdminLTE/Sidebar/knp-menu.html.twig` depending on wether the `knp_menu` is enabled or not. '
            ],
            [
                'name' => 'page_title',
                'describe' => '    Defines the page header inside `.content-header` and implicitly the `title` if you haven\'t changed the content of `title` '
            ],
            [
                'name' => 'page_subtitle',
                'describe' => '    Defines the `small` portion of `.content-header` '
            ],
            [
                'name' => 'breadcrumb',
                'describe' => '    Renders either the `breadcrumb` component or includes `@AdminLTE/Breadcrumb/knp-breadcrumb.html.twig` based on your configuration. '
            ],
            [
                'name' => 'page_content',
                'describe' => '    The main content area. '
            ],
            [
                'name' => 'page_content_class',
                'describe' => '    The CSS class for the content block `page_content`. '
            ],
            [
                'name' => 'page_content_before',
                'describe' => '    A block to add additional content right before the start of `page_content`. '
            ],
            [
                'name' => 'page_content_after',
                'describe' => '    A block to add additional content right after the end of `page_content`. '
            ],
            [
                'name' => 'footer',
                'describe' => '    The main footer. Includes `@AdminLTE/Partials/_footer.html.twig` by default. '
            ],
            [
                'name' => 'control_sidebar',
                'describe' => '    Includes `@AdminLTE/Partials/_control-sidebar.html.twig` '
            ],
            [
                'name' => 'javascripts',
                'describe' => 'block to render `script` tags right before the closing `body`'
            ]
        ];

        return $this->render(
            'base.html.twig',
            [
                'blocks' => $blocks
            ]
        );
    }
}