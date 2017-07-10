<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_126f9d29f853e2cae2b1b3eae1a15db7b503b27c39443e9259a0801a9aea4fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f6ade7624cc108433045bb529535efabef7e64cb8cf044d91d844d88e48c7749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6ade7624cc108433045bb529535efabef7e64cb8cf044d91d844d88e48c7749->enter($__internal_f6ade7624cc108433045bb529535efabef7e64cb8cf044d91d844d88e48c7749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_5569302fc55d6bc2fd669d866cb807b935e383a16a5bc6a2ff6b23eb07671f9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5569302fc55d6bc2fd669d866cb807b935e383a16a5bc6a2ff6b23eb07671f9b->enter($__internal_5569302fc55d6bc2fd669d866cb807b935e383a16a5bc6a2ff6b23eb07671f9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ade7624cc108433045bb529535efabef7e64cb8cf044d91d844d88e48c7749->leave($__internal_f6ade7624cc108433045bb529535efabef7e64cb8cf044d91d844d88e48c7749_prof);

        
        $__internal_5569302fc55d6bc2fd669d866cb807b935e383a16a5bc6a2ff6b23eb07671f9b->leave($__internal_5569302fc55d6bc2fd669d866cb807b935e383a16a5bc6a2ff6b23eb07671f9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5d6731468086e77e10e240fd0ee2efbaf4746d7a5a8b9e8b2c9ecf3e76abdfa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d6731468086e77e10e240fd0ee2efbaf4746d7a5a8b9e8b2c9ecf3e76abdfa8->enter($__internal_5d6731468086e77e10e240fd0ee2efbaf4746d7a5a8b9e8b2c9ecf3e76abdfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d538749ae6d9ecdb2fc0a7fe2135461440d7530ffe8ad6b45b57b54fcc43deef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d538749ae6d9ecdb2fc0a7fe2135461440d7530ffe8ad6b45b57b54fcc43deef->enter($__internal_d538749ae6d9ecdb2fc0a7fe2135461440d7530ffe8ad6b45b57b54fcc43deef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_d538749ae6d9ecdb2fc0a7fe2135461440d7530ffe8ad6b45b57b54fcc43deef->leave($__internal_d538749ae6d9ecdb2fc0a7fe2135461440d7530ffe8ad6b45b57b54fcc43deef_prof);

        
        $__internal_5d6731468086e77e10e240fd0ee2efbaf4746d7a5a8b9e8b2c9ecf3e76abdfa8->leave($__internal_5d6731468086e77e10e240fd0ee2efbaf4746d7a5a8b9e8b2c9ecf3e76abdfa8_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2dafffcd2848a75bafb8b27f704a69334994a6846a974c5799cf8d74759863e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2dafffcd2848a75bafb8b27f704a69334994a6846a974c5799cf8d74759863e->enter($__internal_f2dafffcd2848a75bafb8b27f704a69334994a6846a974c5799cf8d74759863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_06ec7e783f78562af074c83c34a8cd0bf30555b10abe681bc400f807d6fc7e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ec7e783f78562af074c83c34a8cd0bf30555b10abe681bc400f807d6fc7e89->enter($__internal_06ec7e783f78562af074c83c34a8cd0bf30555b10abe681bc400f807d6fc7e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_06ec7e783f78562af074c83c34a8cd0bf30555b10abe681bc400f807d6fc7e89->leave($__internal_06ec7e783f78562af074c83c34a8cd0bf30555b10abe681bc400f807d6fc7e89_prof);

        
        $__internal_f2dafffcd2848a75bafb8b27f704a69334994a6846a974c5799cf8d74759863e->leave($__internal_f2dafffcd2848a75bafb8b27f704a69334994a6846a974c5799cf8d74759863e_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_761e86250fc4f51044e91bcbb1dd8cc5a2cb58d1483e9c14868d0fc639ab815a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_761e86250fc4f51044e91bcbb1dd8cc5a2cb58d1483e9c14868d0fc639ab815a->enter($__internal_761e86250fc4f51044e91bcbb1dd8cc5a2cb58d1483e9c14868d0fc639ab815a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2346e922d2b4b8acbc6f86a0e1e705e4483cf50ea41638e68bce722ba8fe1ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2346e922d2b4b8acbc6f86a0e1e705e4483cf50ea41638e68bce722ba8fe1ab4->enter($__internal_2346e922d2b4b8acbc6f86a0e1e705e4483cf50ea41638e68bce722ba8fe1ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_2346e922d2b4b8acbc6f86a0e1e705e4483cf50ea41638e68bce722ba8fe1ab4->leave($__internal_2346e922d2b4b8acbc6f86a0e1e705e4483cf50ea41638e68bce722ba8fe1ab4_prof);

        
        $__internal_761e86250fc4f51044e91bcbb1dd8cc5a2cb58d1483e9c14868d0fc639ab815a->leave($__internal_761e86250fc4f51044e91bcbb1dd8cc5a2cb58d1483e9c14868d0fc639ab815a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vagrant/symfony/symfony_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
