<?php

/* base.html.twig */
class __TwigTemplate_dc8398aa344b23988420ca99f7214b34c3b393b6db9b8addc582d3e37ba9cbed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d0505306836bcc6a4f6b3ae1b6248a3b9441c7dd299ea8d2cf4dad1ba709632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0505306836bcc6a4f6b3ae1b6248a3b9441c7dd299ea8d2cf4dad1ba709632->enter($__internal_5d0505306836bcc6a4f6b3ae1b6248a3b9441c7dd299ea8d2cf4dad1ba709632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5d0505306836bcc6a4f6b3ae1b6248a3b9441c7dd299ea8d2cf4dad1ba709632->leave($__internal_5d0505306836bcc6a4f6b3ae1b6248a3b9441c7dd299ea8d2cf4dad1ba709632_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aedbccffba2340170c5c7886710c1c874cb1ad1ff70bdffdf34190ddcae31304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aedbccffba2340170c5c7886710c1c874cb1ad1ff70bdffdf34190ddcae31304->enter($__internal_aedbccffba2340170c5c7886710c1c874cb1ad1ff70bdffdf34190ddcae31304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_aedbccffba2340170c5c7886710c1c874cb1ad1ff70bdffdf34190ddcae31304->leave($__internal_aedbccffba2340170c5c7886710c1c874cb1ad1ff70bdffdf34190ddcae31304_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56bb5a588653bc246e1372e9250e1cc614633a7853106a66f1fab71f9cd737f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56bb5a588653bc246e1372e9250e1cc614633a7853106a66f1fab71f9cd737f0->enter($__internal_56bb5a588653bc246e1372e9250e1cc614633a7853106a66f1fab71f9cd737f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_56bb5a588653bc246e1372e9250e1cc614633a7853106a66f1fab71f9cd737f0->leave($__internal_56bb5a588653bc246e1372e9250e1cc614633a7853106a66f1fab71f9cd737f0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e26cba92d781415039d8d1d0ce6948f2f29fc6db819219459594e76b19cd356e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e26cba92d781415039d8d1d0ce6948f2f29fc6db819219459594e76b19cd356e->enter($__internal_e26cba92d781415039d8d1d0ce6948f2f29fc6db819219459594e76b19cd356e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e26cba92d781415039d8d1d0ce6948f2f29fc6db819219459594e76b19cd356e->leave($__internal_e26cba92d781415039d8d1d0ce6948f2f29fc6db819219459594e76b19cd356e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f2418fb5386816f4a563b4a875962834244e56f7950b637fcfc9e7bd7822cd4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2418fb5386816f4a563b4a875962834244e56f7950b637fcfc9e7bd7822cd4f->enter($__internal_f2418fb5386816f4a563b4a875962834244e56f7950b637fcfc9e7bd7822cd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_f2418fb5386816f4a563b4a875962834244e56f7950b637fcfc9e7bd7822cd4f->leave($__internal_f2418fb5386816f4a563b4a875962834244e56f7950b637fcfc9e7bd7822cd4f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/ProductionProjects/Infopedia/app/Resources/views/base.html.twig");
    }
}
