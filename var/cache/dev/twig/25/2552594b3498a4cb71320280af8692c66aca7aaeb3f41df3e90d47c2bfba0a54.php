<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5822d96dc649f46e30dff249a3a71de6a19ae062cb782a290b55e829dac1467e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_671f333557af604d047c196d2f3ceda18b58abbc94293d4d5e91df73c47da7bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_671f333557af604d047c196d2f3ceda18b58abbc94293d4d5e91df73c47da7bb->enter($__internal_671f333557af604d047c196d2f3ceda18b58abbc94293d4d5e91df73c47da7bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ab725745a83a39daf76d021a014644fb778c3af1e04f2e2ef1d31d2a36f5d797 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab725745a83a39daf76d021a014644fb778c3af1e04f2e2ef1d31d2a36f5d797->enter($__internal_ab725745a83a39daf76d021a014644fb778c3af1e04f2e2ef1d31d2a36f5d797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_671f333557af604d047c196d2f3ceda18b58abbc94293d4d5e91df73c47da7bb->leave($__internal_671f333557af604d047c196d2f3ceda18b58abbc94293d4d5e91df73c47da7bb_prof);

        
        $__internal_ab725745a83a39daf76d021a014644fb778c3af1e04f2e2ef1d31d2a36f5d797->leave($__internal_ab725745a83a39daf76d021a014644fb778c3af1e04f2e2ef1d31d2a36f5d797_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b6da0a3bbc9b85aa85ac139a4c572e47ef4c5c5219b2c67aa558a08011ce84dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6da0a3bbc9b85aa85ac139a4c572e47ef4c5c5219b2c67aa558a08011ce84dd->enter($__internal_b6da0a3bbc9b85aa85ac139a4c572e47ef4c5c5219b2c67aa558a08011ce84dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ccd0d1abd04fd625d404b6acf7a4131f520f42627a627750a298c879c4be0104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccd0d1abd04fd625d404b6acf7a4131f520f42627a627750a298c879c4be0104->enter($__internal_ccd0d1abd04fd625d404b6acf7a4131f520f42627a627750a298c879c4be0104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ccd0d1abd04fd625d404b6acf7a4131f520f42627a627750a298c879c4be0104->leave($__internal_ccd0d1abd04fd625d404b6acf7a4131f520f42627a627750a298c879c4be0104_prof);

        
        $__internal_b6da0a3bbc9b85aa85ac139a4c572e47ef4c5c5219b2c67aa558a08011ce84dd->leave($__internal_b6da0a3bbc9b85aa85ac139a4c572e47ef4c5c5219b2c67aa558a08011ce84dd_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c69c63d8d5d54be51dcd692f9b7117b3e6aee10835b0aa4355e86a5b43effcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c69c63d8d5d54be51dcd692f9b7117b3e6aee10835b0aa4355e86a5b43effcb->enter($__internal_0c69c63d8d5d54be51dcd692f9b7117b3e6aee10835b0aa4355e86a5b43effcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f065138fa166969b6c54725e8dffb2e57a432a09005a7ba46690e2926efab79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f065138fa166969b6c54725e8dffb2e57a432a09005a7ba46690e2926efab79->enter($__internal_7f065138fa166969b6c54725e8dffb2e57a432a09005a7ba46690e2926efab79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_7f065138fa166969b6c54725e8dffb2e57a432a09005a7ba46690e2926efab79->leave($__internal_7f065138fa166969b6c54725e8dffb2e57a432a09005a7ba46690e2926efab79_prof);

        
        $__internal_0c69c63d8d5d54be51dcd692f9b7117b3e6aee10835b0aa4355e86a5b43effcb->leave($__internal_0c69c63d8d5d54be51dcd692f9b7117b3e6aee10835b0aa4355e86a5b43effcb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_519192685423edab182209dacd85928d5b456581886eefbbd73888aaa640ef0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_519192685423edab182209dacd85928d5b456581886eefbbd73888aaa640ef0f->enter($__internal_519192685423edab182209dacd85928d5b456581886eefbbd73888aaa640ef0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_742eb2db1044265f3450c0652226fcb9d60be54179042a96e96181db00bb92a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742eb2db1044265f3450c0652226fcb9d60be54179042a96e96181db00bb92a4->enter($__internal_742eb2db1044265f3450c0652226fcb9d60be54179042a96e96181db00bb92a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_742eb2db1044265f3450c0652226fcb9d60be54179042a96e96181db00bb92a4->leave($__internal_742eb2db1044265f3450c0652226fcb9d60be54179042a96e96181db00bb92a4_prof);

        
        $__internal_519192685423edab182209dacd85928d5b456581886eefbbd73888aaa640ef0f->leave($__internal_519192685423edab182209dacd85928d5b456581886eefbbd73888aaa640ef0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/vagrant/symfony/symfony_api/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
