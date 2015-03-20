<?php

/* BaseBundle:Admin:index.html.twig */
class __TwigTemplate_c53bd38ba3fcc92222eb22d48895decb83f71617ee8c9aaeac1e4f51e37c00b8 extends Twig_Template
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
        echo "<html>
\t<head>
\t\t<title>
\t\t\tPage admin
\t\t</title>
\t</head>
<body>

\t<h3>Admin zone</h3>
\t<p>
\t\t
\t\t";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            echo " 
\t\t\t<span class=\"info\">";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</span>\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
\t</p>
\t<p>
\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("base_admin_ajouter_article");
        echo "\">Ajouter un article</a>
\t</p>
\t<p>
\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("base_admin_modifier_article");
        echo "\">Modifier un article
\t\t</a>
\t</p>
\t<p>
\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("base_admin_supprimer_article");
        echo "\">Supprimer un article
\t\t</a>
\t</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  57 => 21,  51 => 18,  46 => 15,  38 => 13,  32 => 12,  19 => 1,);
    }
}
