<?php

/* BaseBundle:AdminArticle:suppression.html.twig */
class __TwigTemplate_78a5d64bafe32e34b9234cfacc0fd0c7cd6c41b2341a87b4460d1b05c82df808 extends Twig_Template
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
\t\t\tPage suppression
\t\t</title>
\t</head>
<body>

\t<h3>Zone de suppression</h3>
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
        return "BaseBundle:AdminArticle:suppression.html.twig";
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
