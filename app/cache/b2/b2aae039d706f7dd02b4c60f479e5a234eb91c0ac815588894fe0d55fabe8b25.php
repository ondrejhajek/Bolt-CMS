<?php

/* @BoltProfiler/bolt.html.twig */
class __TwigTemplate_e9df382d4a254d025c3f3a827197bf88839484c84d17ddd0542f06e5abbcad53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@BoltProfiler/bolt.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26d96011529ec611550ba70825e2fc2c16f4b9e1260da5030686c84c5ff61b57 = $this->env->getExtension("native_profiler");
        $__internal_26d96011529ec611550ba70825e2fc2c16f4b9e1260da5030686c84c5ff61b57->enter($__internal_26d96011529ec611550ba70825e2fc2c16f4b9e1260da5030686c84c5ff61b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BoltProfiler/bolt.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26d96011529ec611550ba70825e2fc2c16f4b9e1260da5030686c84c5ff61b57->leave($__internal_26d96011529ec611550ba70825e2fc2c16f4b9e1260da5030686c84c5ff61b57_prof);

    }

    // line 4
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69eb18de71e8585ddc2d2f263deb17b6bc843d53043e6dec50bcba4c638e31a9 = $this->env->getExtension("native_profiler");
        $__internal_69eb18de71e8585ddc2d2f263deb17b6bc843d53043e6dec50bcba4c638e31a9->enter($__internal_69eb18de71e8585ddc2d2f263deb17b6bc843d53043e6dec50bcba4c638e31a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 5
        echo "<style>
.sf-toolbarreset {
    z-index: 100002;
    background-color: #4C505C;
}
.sf-minitoolbar {
    background-color: transparent;
    background-image: url(data:image/png;base64,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) ;
    background-size: 32px 32px;
    background-repeat: no-repeat;
}
.sf-minitoolbar svg {
    opacity: 0;
}
.sf-toolbar-icon img {
    max-height: 32px;
}
</style>

    ";
        // line 24
        ob_start();
        // line 25
        echo "        <img width=\"28\" height=\"28\" alt=\"Bolt\" style=\"width: 28px; height: 28px; max-width: 28px; max-height: 28px; margin-top: -2px; margin-bottom: -3px; display: inline;\"
            src=\"data:image/png;base64,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\">

        <span class=\"sf-toolbar-label\">
            <strong>Bolt ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "version", array()), "html", null, true);
        echo "</strong>
        </span>

    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        ob_start();
        // line 35
        echo "
        <div class=\"sf-toolbar-info-piece\">
            <span>
                <strong>Bolt - </strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "payoff", array()), "html", null, true);
        echo "
            </span>
        </div>

        <div class=\"sf-toolbar-info-piece\">
            <span>
                Version: ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "version", array()), "html", null, true);
        echo " - ";
        echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "dashboardlink", array());
        echo " -
                Visit <a href=\"http://bolt.cm\" target=\"_blank\">Bolt.cm</a>
            </span>
        </div>

        ";
        // line 49
        if ( !twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "branding", array()))) {
            // line 50
            echo "        <div class=\"sf-toolbar-info-piece\">

            <span>
                ";
            // line 53
            echo $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "branding", array());
            echo "
            </span>

        </div>
        ";
        }
        // line 58
        echo "
        ";
        // line 59
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "editlink", array())) {
            // line 60
            echo "        <div class=\"sf-toolbar-info-piece\">
            <hr style=\"margin: 8px 0 12px; padding: 0; border: 0; border-bottom: 1px solid #777;\">
            <span> Edit: <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "editlink", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Bolt')->excerpt($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "edittitle", array()), 40), "(no title)"), "html", null, true);
            echo "</a> </span>
        </div>
        ";
        }
        // line 65
        echo "

    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 68
        echo "    ";
        $this->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig", "@BoltProfiler/bolt.html.twig", 68)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
        
        $__internal_69eb18de71e8585ddc2d2f263deb17b6bc843d53043e6dec50bcba4c638e31a9->leave($__internal_69eb18de71e8585ddc2d2f263deb17b6bc843d53043e6dec50bcba4c638e31a9_prof);

    }

    public function getTemplateName()
    {
        return "@BoltProfiler/bolt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 68,  137 => 65,  129 => 62,  125 => 60,  123 => 59,  120 => 58,  112 => 53,  107 => 50,  105 => 49,  95 => 44,  86 => 38,  81 => 35,  79 => 34,  76 => 33,  69 => 29,  63 => 25,  61 => 24,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* */
/* {% block toolbar %}*/
/* <style>*/
/* .sf-toolbarreset {*/
/*     z-index: 100002;*/
/*     background-color: #4C505C;*/
/* }*/
/* .sf-minitoolbar {*/
/*     background-color: transparent;*/
/*     background-image: url(data:image/png;base64,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) ;*/
/*     background-size: 32px 32px;*/
/*     background-repeat: no-repeat;*/
/* }*/
/* .sf-minitoolbar svg {*/
/*     opacity: 0;*/
/* }*/
/* .sf-toolbar-icon img {*/
/*     max-height: 32px;*/
/* }*/
/* </style>*/
/* */
/*     {% set icon %}*/
/*         <img width="28" height="28" alt="Bolt" style="width: 28px; height: 28px; max-width: 28px; max-height: 28px; margin-top: -2px; margin-bottom: -3px; display: inline;"*/
/*             src="data:image/png;base64,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">*/
/* */
/*         <span class="sf-toolbar-label">*/
/*             <strong>Bolt {{ collector.version }}</strong>*/
/*         </span>*/
/* */
/*     {% endset %}*/
/* */
/*     {% set text %}*/
/* */
/*         <div class="sf-toolbar-info-piece">*/
/*             <span>*/
/*                 <strong>Bolt - </strong> {{ collector.payoff }}*/
/*             </span>*/
/*         </div>*/
/* */
/*         <div class="sf-toolbar-info-piece">*/
/*             <span>*/
/*                 Version: {{ collector.version }} - {{ collector.dashboardlink|raw }} -*/
/*                 Visit <a href="http://bolt.cm" target="_blank">Bolt.cm</a>*/
/*             </span>*/
/*         </div>*/
/* */
/*         {% if collector.branding is not empty %}*/
/*         <div class="sf-toolbar-info-piece">*/
/* */
/*             <span>*/
/*                 {{ collector.branding|raw }}*/
/*             </span>*/
/* */
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if collector.editlink %}*/
/*         <div class="sf-toolbar-info-piece">*/
/*             <hr style="margin: 8px 0 12px; padding: 0; border: 0; border-bottom: 1px solid #777;">*/
/*             <span> Edit: <a href="{{ collector.editlink }}">{{ collector.edittitle|excerpt(40)|default("(no title)") }}</a> </span>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/* */
/*     {% endset %}*/
/*     {% include '@WebProfiler/Profiler/toolbar_item.html.twig' with { 'link': profiler_url } %}*/
/* {% endblock %}*/
/* */
/* */
