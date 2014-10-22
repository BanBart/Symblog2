<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_5ce91bc91ce2856c19fc34e2b10717d11a89d15eafb7d52aa13cd9cfe73dc0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BloggerBlogBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 5
            echo "        <article class=\"blog\">
            <div class=\"date\">
                <time datetime=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "createdAt", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "createdAt", array()), "l, F j, Y"), "html", null, true);
            echo "</time>
            </div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</a></h2>
            </header>
            
            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($context["blog"], "image", array())))), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "\">Continue reading...</a>
                </p>
            </div>
                
                
            <footer class=\"meta\">
                <p>Comments: <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()), "slug" => $this->getAttribute($context["blog"], "slug", array()))), "html", null, true);
            echo "#comments\">- ";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["blog"], "comments", array())), "html", null, true);
            echo "</a> </p>
                <p>Posted by <span class=\"highlight\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</span> at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "createdAt", array()), "h:iA"), "html", null, true);
            echo "</p>
                <p>Tags: <span class=\"highlight\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "tags", array()), "html", null, true);
            echo "</span></p>
            </footer>
            
            
        </article>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <p>There are no blog entries for symblog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 31,  88 => 25,  82 => 24,  76 => 23,  67 => 17,  62 => 15,  57 => 13,  49 => 10,  41 => 7,  37 => 5,  31 => 4,  28 => 3,);
    }
}
