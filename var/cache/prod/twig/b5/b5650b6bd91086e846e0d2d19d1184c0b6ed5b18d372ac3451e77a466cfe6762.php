<?php

/* :Hebergement/Form:addndd.html.twig */
class __TwigTemplate_8d703b6598adde1d2e8cbbfd93f5a8e5346aa262cfa8d2c1221ff8c1fde17907 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":Hebergement/Form:addndd.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    <!-- Site wrapper -->
    <div class=\"wrapper\">

        ";
        // line 8
        $this->loadTemplate("header.html.twig", ":Hebergement/Form:addndd.html.twig", 8)->display($context);
        // line 9
        echo "        <!-- =============================================== -->
        ";
        // line 10
        $this->loadTemplate("sidebar.html.twig", ":Hebergement/Form:addndd.html.twig", 10)->display($context);
        // line 11
        echo "        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class=\"content-wrapper\">
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["h1"]) ? $context["h1"] : null), "html", null, true);
        echo "
                </h1>

                ";
        // line 20
        $this->loadTemplate("breadcrumb.html.twig", ":Hebergement/Form:addndd.html.twig", 20)->display(array("breadcrumb" => (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)));
        // line 21
        echo "

            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 27
        $this->loadTemplate("flashMessage.html.twig", ":Hebergement/Form:addndd.html.twig", 27)->display($context);
        // line 28
        echo "                <div class=\"col-md-6\">
                    ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "



                    <div class=\"form-group\">

<p>Choisir le serveur sur lequel vous voulez héberger votre domaine.</p>

                <div class=\"ui-widget\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "instance", array()), 'row');
        echo "

                </div>



                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
                </div>
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        ";
        // line 50
        $this->loadTemplate("footer.html.twig", ":Hebergement/Form:addndd.html.twig", 50)->display($context);
        // line 51
        echo "



    </div><!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return ":Hebergement/Form:addndd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 51,  106 => 50,  98 => 45,  89 => 39,  77 => 30,  73 => 29,  70 => 28,  68 => 27,  60 => 21,  58 => 20,  52 => 17,  44 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <!-- Site wrapper -->*/
/*     <div class="wrapper">*/
/* */
/*         {% include 'header.html.twig' %}*/
/*         <!-- =============================================== -->*/
/*         {% include 'sidebar.html.twig' %}*/
/*         <!-- =============================================== -->*/
/*         <!-- Content Wrapper. Contains page content -->*/
/*         <div class="content-wrapper">*/
/*             <!-- Content Header (Page header) -->*/
/*             <section class="content-header">*/
/*                 <h1>*/
/*                     {{ h1 }}*/
/*                 </h1>*/
/* */
/*                 {% include 'breadcrumb.html.twig'  with {'breadcrumb': breadcrumb} only %}*/
/* */
/* */
/*             </section>*/
/* */
/*             <!-- Main content -->*/
/*             <section class="content">*/
/*                 {% include 'flashMessage.html.twig' %}*/
/*                 <div class="col-md-6">*/
/*                     {{ form_start(form) }}*/
/*                     {{ form_errors(form) }}*/
/* */
/* */
/* */
/*                     <div class="form-group">*/
/* */
/* <p>Choisir le serveur sur lequel vous voulez héberger votre domaine.</p>*/
/* */
/*                 <div class="ui-widget">*/
/*                     {{ form_row(form.instance) }}*/
/* */
/*                 </div>*/
/* */
/* */
/* */
/*                 {{ form_end(form) }}*/
/*                 </div>*/
/*             </section><!-- /.content -->*/
/*         </div><!-- /.content-wrapper -->*/
/* */
/*         {% include 'footer.html.twig' %}*/
/* */
/* */
/* */
/* */
/*     </div><!-- ./wrapper -->*/
/* {% endblock %}*/
/* */
