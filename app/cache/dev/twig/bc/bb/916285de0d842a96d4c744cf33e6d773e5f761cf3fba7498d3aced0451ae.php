<?php

/* ::base.html.twig */
class __TwigTemplate_bcbb916285de0d842a96d4c744cf33e6d773e5f761cf3fba7498d3aced0451ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 35
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 38
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 39
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 47
        $this->displayBlock('sidebar', $context, $blocks);
        // line 48
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 51
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "            </div>
        </section>

        ";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "51c56cc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51c56cc") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/51c56cc.css");
            // line 16
            echo "        <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 18
        echo "        ";
    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        // line 27
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 38
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">symblog</a>";
    }

    // line 39
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
    }

    // line 47
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 51
    public function block_footer($context, array $blocks = array())
    {
        // line 52
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
        } else {
            // asset "3c62cfd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c62cfd") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/3c62cfd.js");
            // line 61
            echo "             <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 63
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 63,  197 => 61,  191 => 58,  188 => 57,  183 => 52,  180 => 51,  175 => 47,  170 => 44,  162 => 39,  154 => 38,  146 => 31,  142 => 30,  138 => 29,  134 => 27,  131 => 26,  127 => 18,  120 => 16,  115 => 13,  111 => 11,  108 => 10,  102 => 6,  96 => 64,  94 => 57,  89 => 54,  87 => 51,  82 => 48,  80 => 47,  76 => 45,  74 => 44,  66 => 39,  62 => 38,  57 => 35,  55 => 26,  44 => 19,  42 => 10,  35 => 6,  28 => 1,);
    }
}
