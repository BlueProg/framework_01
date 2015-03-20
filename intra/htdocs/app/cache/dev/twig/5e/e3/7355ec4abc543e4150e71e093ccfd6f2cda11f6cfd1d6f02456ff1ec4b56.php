<?php

/* BaseBundle:AdminArticle:modification.html.twig */
class __TwigTemplate_5ee37355ec4abc543e4150e71e093ccfd6f2cda11f6cfd1d6f02456ff1ec4b56 extends Twig_Template
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
\t\t\tPage de modification
\t\t</title>
\t</head>
<body>

\t<h3>Zone de modification</h3>
\t<p>
\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("base_admin_home");
        echo "\">Retour au home</a>
\t</p>
\t<p>
\t\t
\t</p>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BaseBundle:AdminArticle:modification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }
}
