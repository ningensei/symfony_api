<?php

/* GuzzleBundle::debug.html.twig */
class __TwigTemplate_3d53984f0812ff447f6ca011c229522b228bae773a99dc50917403236cc0a596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "GuzzleBundle::debug.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c7441a51f52ee3ad2c2010351cd022d1f440bf7fa892aba429448a1105a85b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c7441a51f52ee3ad2c2010351cd022d1f440bf7fa892aba429448a1105a85b9->enter($__internal_6c7441a51f52ee3ad2c2010351cd022d1f440bf7fa892aba429448a1105a85b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $__internal_b2114632959dcd3b60c09e74b029ef7b8246dda67be5406f26397ed77cb70888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2114632959dcd3b60c09e74b029ef7b8246dda67be5406f26397ed77cb70888->enter($__internal_b2114632959dcd3b60c09e74b029ef7b8246dda67be5406f26397ed77cb70888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GuzzleBundle::debug.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c7441a51f52ee3ad2c2010351cd022d1f440bf7fa892aba429448a1105a85b9->leave($__internal_6c7441a51f52ee3ad2c2010351cd022d1f440bf7fa892aba429448a1105a85b9_prof);

        
        $__internal_b2114632959dcd3b60c09e74b029ef7b8246dda67be5406f26397ed77cb70888->leave($__internal_b2114632959dcd3b60c09e74b029ef7b8246dda67be5406f26397ed77cb70888_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d3f7cd6eded6cc9fe3b1d98d817b3f9b278e27ad6ec97c41e1ad33a27d00468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d3f7cd6eded6cc9fe3b1d98d817b3f9b278e27ad6ec97c41e1ad33a27d00468->enter($__internal_4d3f7cd6eded6cc9fe3b1d98d817b3f9b278e27ad6ec97c41e1ad33a27d00468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_177d29d1f01a49f2e09f161fb442d71b1524ee281727444322db61867196a8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177d29d1f01a49f2e09f161fb442d71b1524ee281727444322db61867196a8aa->enter($__internal_177d29d1f01a49f2e09f161fb442d71b1524ee281727444322db61867196a8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array())) {
            // line 6
            echo "        ";
            if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "errorCount", array())) {
                // line 7
                echo "            ";
                $context["color"] = "red";
                // line 8
                echo "        ";
            } else {
                // line 9
                echo "            ";
                $context["color"] = "green";
                // line 10
                echo "        ";
            }
            // line 11
            echo "
        ";
            // line 12
            ob_start();
            // line 13
            echo "            ";
            echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
            echo "
            <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 14
            echo twig_escape_filter($this->env, ($context["color"] ?? $this->getContext($context, "color")), "html", null, true);
            echo "\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 18
            echo "
        ";
            // line 19
            ob_start();
            // line 20
            echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
            echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                ";
            // line 28
            if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) > 1)) {
                // line 29
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.2f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array())), "html", null, true);
                echo " s</span>
                ";
            } else {
                // line 31
                echo "                    <span>";
                echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
                echo " ms</span>
                ";
            }
            // line 33
            echo "            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 35
            echo "
        ";
            // line 36
            $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "GuzzleBundle::debug.html.twig", 36)->display(array_merge($context, array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")))));
            // line 37
            echo "    ";
        }
        
        $__internal_177d29d1f01a49f2e09f161fb442d71b1524ee281727444322db61867196a8aa->leave($__internal_177d29d1f01a49f2e09f161fb442d71b1524ee281727444322db61867196a8aa_prof);

        
        $__internal_4d3f7cd6eded6cc9fe3b1d98d817b3f9b278e27ad6ec97c41e1ad33a27d00468->leave($__internal_4d3f7cd6eded6cc9fe3b1d98d817b3f9b278e27ad6ec97c41e1ad33a27d00468_prof);

    }

    // line 41
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e8bec03c848715230ac36959ba810cf65572ba7372b48296af223afb09f6acef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8bec03c848715230ac36959ba810cf65572ba7372b48296af223afb09f6acef->enter($__internal_e8bec03c848715230ac36959ba810cf65572ba7372b48296af223afb09f6acef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fce933331c79bdeb81089045a3854951b38c5fd485fe9414d69e278bb8b23546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce933331c79bdeb81089045a3854951b38c5fd485fe9414d69e278bb8b23546->enter($__internal_fce933331c79bdeb81089045a3854951b38c5fd485fe9414d69e278bb8b23546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 42
        echo "
    <span class=\"label\">
        <span class=\"icon\">
            ";
        // line 45
        echo twig_include($this->env, $context, "@Guzzle/Icons/logo.svg.twig");
        echo "
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "callCount", array()), "html", null, true);
        echo "</span>
        </span>
    </span>
";
        
        $__internal_fce933331c79bdeb81089045a3854951b38c5fd485fe9414d69e278bb8b23546->leave($__internal_fce933331c79bdeb81089045a3854951b38c5fd485fe9414d69e278bb8b23546_prof);

        
        $__internal_e8bec03c848715230ac36959ba810cf65572ba7372b48296af223afb09f6acef->leave($__internal_e8bec03c848715230ac36959ba810cf65572ba7372b48296af223afb09f6acef_prof);

    }

    // line 55
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f87bbd929c5de21e4d7cc8bc63fd06b2d173d0ec8a8498d6707e59db4fe8575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f87bbd929c5de21e4d7cc8bc63fd06b2d173d0ec8a8498d6707e59db4fe8575->enter($__internal_9f87bbd929c5de21e4d7cc8bc63fd06b2d173d0ec8a8498d6707e59db4fe8575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f5731ef4b25a0909707590224ba31a10b9774ccfc141c40cf08c267f5936d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f5731ef4b25a0909707590224ba31a10b9774ccfc141c40cf08c267f5936d75->enter($__internal_7f5731ef4b25a0909707590224ba31a10b9774ccfc141c40cf08c267f5936d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 56
        echo "
    ";
        // line 57
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/css/main.css"), "html", null, true);
        echo "\" />
    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/guzzle/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7f5731ef4b25a0909707590224ba31a10b9774ccfc141c40cf08c267f5936d75->leave($__internal_7f5731ef4b25a0909707590224ba31a10b9774ccfc141c40cf08c267f5936d75_prof);

        
        $__internal_9f87bbd929c5de21e4d7cc8bc63fd06b2d173d0ec8a8498d6707e59db4fe8575->leave($__internal_9f87bbd929c5de21e4d7cc8bc63fd06b2d173d0ec8a8498d6707e59db4fe8575_prof);

    }

    // line 63
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b8beb3508031de01254d72a37250c701c84535524eb91336aa13f83bde712fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b8beb3508031de01254d72a37250c701c84535524eb91336aa13f83bde712fe->enter($__internal_5b8beb3508031de01254d72a37250c701c84535524eb91336aa13f83bde712fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_762030eac86bdb2a5f44a80e87bd59b9b018d300d3100d8959d16ff107ab69ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_762030eac86bdb2a5f44a80e87bd59b9b018d300d3100d8959d16ff107ab69ad->enter($__internal_762030eac86bdb2a5f44a80e87bd59b9b018d300d3100d8959d16ff107ab69ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 64
        echo "
    <h2>Logs</h2>

    ";
        // line 67
        $this->loadTemplate("GuzzleBundle::profiler.html.twig", "GuzzleBundle::debug.html.twig", 67)->display(array_merge($context, array("collector" => ($context["collector"] ?? $this->getContext($context, "collector")))));
        
        $__internal_762030eac86bdb2a5f44a80e87bd59b9b018d300d3100d8959d16ff107ab69ad->leave($__internal_762030eac86bdb2a5f44a80e87bd59b9b018d300d3100d8959d16ff107ab69ad_prof);

        
        $__internal_5b8beb3508031de01254d72a37250c701c84535524eb91336aa13f83bde712fe->leave($__internal_5b8beb3508031de01254d72a37250c701c84535524eb91336aa13f83bde712fe_prof);

    }

    public function getTemplateName()
    {
        return "GuzzleBundle::debug.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 67,  219 => 64,  210 => 63,  198 => 60,  194 => 59,  189 => 57,  186 => 56,  177 => 55,  163 => 49,  156 => 45,  151 => 42,  142 => 41,  131 => 37,  129 => 36,  126 => 35,  122 => 33,  116 => 31,  110 => 29,  108 => 28,  100 => 23,  95 => 20,  93 => 19,  90 => 18,  84 => 15,  80 => 14,  75 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  52 => 5,  43 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"WebProfilerBundle:Profiler:layout.html.twig\" %}


{% block toolbar %}
    {% if collector.callCount %}
        {% if collector.errorCount %}
            {% set color = 'red' %}
        {% else %}
            {% set color = 'green' %}
        {% endif %}

        {% set icon %}
            {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
            <span class=\"sf-toolbar-status sf-toolbar-status-{{ color }}\">
                {{ collector.callCount }}
            </span>
        {% endset %}

        {% set text %}

            <div class=\"sf-toolbar-info-piece\">
                <b>API Calls</b>
                <span>{{ collector.callCount }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Total time</b>
                {% if collector.totalTime > 1.0 %}
                    <span>{{ '%0.2f'|format(collector.totalTime) }} s</span>
                {% else %}
                    <span>{{ '%0.0f'|format(collector.totalTime * 1000) }} ms</span>
                {% endif %}
            </div>
        {% endset %}

        {% include \"WebProfilerBundle:Profiler:toolbar_item.html.twig\" with { \"link\": profiler_url } %}
    {% endif %}
{% endblock %}


{% block menu %}

    <span class=\"label\">
        <span class=\"icon\">
            {{ include(\"@Guzzle/Icons/logo.svg.twig\") }}
        </span>
        <strong>Guzzle</strong>
        <span class=\"count\">
            <span>{{ collector.callCount }}</span>
        </span>
    </span>
{% endblock %}


{% block head %}

    {{ parent() }}

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/guzzle/css/main.css') }}\" />
    <script src=\"{{ asset('bundles/guzzle/js/jquery.min.js') }}\"></script>
{% endblock %}

{% block panel %}

    <h2>Logs</h2>

    {% include 'GuzzleBundle::profiler.html.twig' with { 'collector': collector } %}
{% endblock %}
", "GuzzleBundle::debug.html.twig", "/home/vagrant/symfony/symfony_api/vendor/eightpoints/guzzle-bundle/EightPoints/Bundle/GuzzleBundle/Resources/views/debug.html.twig");
    }
}
