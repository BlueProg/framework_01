<?php

/* BaseBundle:AdminArticle:ajouter.html.twig */
class __TwigTemplate_4154dd20b8f7ac186d32d823f64a196408c76084ce2c029699d47032b3755db5 extends Twig_Template
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
\t\t\tPage ajout
\t\t</title>
\t</head>
<body>

\t<h3>Zone d'ajout</h3>
\t<form method=\"post\">
\t\t <input type=\"text\" name=\"titre\" />
\t\t <input type=\"submit\"/>
\t</form>
\t<p>
\t\t<a href=\"";
        // line 15
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
        return "BaseBundle:AdminArticle:ajouter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
    }
}
