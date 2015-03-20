<?php

/* BaseBundle:Public:page.html.twig */
class __TwigTemplate_36412b8a065f18b6910b84f7b3b36f557125edcb1460daa4ba7ef3d1f8cfe18c extends Twig_Template
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
<body>

Page numero: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Public:page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
