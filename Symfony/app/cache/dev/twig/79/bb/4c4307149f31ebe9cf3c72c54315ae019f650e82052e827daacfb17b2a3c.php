<?php

/* SdzBlogBundle:Blog:layout.html.twig */
class __TwigTemplate_79bb4c4307149f31ebe9cf3c72c54315ae019f650e82052e827daacfb17b2a3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>


<link rel=\"stylesheet\" type=\"text/css\" href=\"/var/www/Symfony/test/vendor/twitter/bootstrap/dist/bootstrap.css\">



<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
lol
    ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "lol
  </body>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "SdzBlog";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
    }

    public function getTemplateName()
    {
        return "SdzBlogBundle:Blog:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  58 => 16,  70 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 14,  28 => 3,  93 => 28,  88 => 6,  78 => 21,  87 => 25,  46 => 7,  44 => 12,  31 => 6,  38 => 6,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 11,  21 => 1,  25 => 3,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  27 => 5,  24 => 2,  19 => 2,  79 => 18,  72 => 16,  69 => 25,  47 => 9,  40 => 15,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 19,  43 => 6,  41 => 5,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 41,  73 => 14,  64 => 9,  60 => 6,  57 => 15,  54 => 10,  51 => 14,  48 => 9,  45 => 8,  42 => 17,  39 => 6,  36 => 5,  33 => 11,  30 => 7,);
    }
}
