<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_64e7f83688d00c8107537283f17555c365a0749c6484aa89a5c2200bcef60b5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name");
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo "

Replay-to: ";
        // line 3
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email");
        echo "
Subject: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject");
        echo "
Body:
";
        // line 6
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body");
        echo "
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  27 => 3,  19 => 1,);
    }
}
