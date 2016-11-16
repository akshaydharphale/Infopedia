<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c132d01d33758740e5a5f4324d4d2205da7de093335a834ada7a417685975d16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28ca8f6377b1ea9dbbdab57c89cf5bf2575d24caed955875685d8ed69bd54c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ca8f6377b1ea9dbbdab57c89cf5bf2575d24caed955875685d8ed69bd54c29->enter($__internal_28ca8f6377b1ea9dbbdab57c89cf5bf2575d24caed955875685d8ed69bd54c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ca8f6377b1ea9dbbdab57c89cf5bf2575d24caed955875685d8ed69bd54c29->leave($__internal_28ca8f6377b1ea9dbbdab57c89cf5bf2575d24caed955875685d8ed69bd54c29_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3684453044f1a33c740905dd84571dbd3ce4f938d8e97f872bc36f1771f93d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3684453044f1a33c740905dd84571dbd3ce4f938d8e97f872bc36f1771f93d95->enter($__internal_3684453044f1a33c740905dd84571dbd3ce4f938d8e97f872bc36f1771f93d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_3684453044f1a33c740905dd84571dbd3ce4f938d8e97f872bc36f1771f93d95->leave($__internal_3684453044f1a33c740905dd84571dbd3ce4f938d8e97f872bc36f1771f93d95_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e9a05c2d367026952c6f8ab83d413a428cd2dd9a8e425932e5823a04bcf2adfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9a05c2d367026952c6f8ab83d413a428cd2dd9a8e425932e5823a04bcf2adfc->enter($__internal_e9a05c2d367026952c6f8ab83d413a428cd2dd9a8e425932e5823a04bcf2adfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9a05c2d367026952c6f8ab83d413a428cd2dd9a8e425932e5823a04bcf2adfc->leave($__internal_e9a05c2d367026952c6f8ab83d413a428cd2dd9a8e425932e5823a04bcf2adfc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ce68450c91030e257671a85aa4d68c3881e7ba18353690f8ec52a77284a13be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ce68450c91030e257671a85aa4d68c3881e7ba18353690f8ec52a77284a13be->enter($__internal_3ce68450c91030e257671a85aa4d68c3881e7ba18353690f8ec52a77284a13be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3ce68450c91030e257671a85aa4d68c3881e7ba18353690f8ec52a77284a13be->leave($__internal_3ce68450c91030e257671a85aa4d68c3881e7ba18353690f8ec52a77284a13be_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/ProductionProjects/Infopedia/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
