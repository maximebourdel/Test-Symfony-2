<?php

/* MopaBootstrapBundle:Pagination:sliding.html.twig */
class __TwigTemplate_ed3888dfb0401aeb44b2a5f377657d7830e8acb92841f5a1a755387d653110c3 extends Twig_Template
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
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "    <div class=\"pagination\">
    ";
            // line 3
            $context["item"] = "MopaBootstrapBundle:Pagination:sliding_item.html.twig";
            // line 4
            echo "
        <ul>
            ";
            // line 6
            $template = $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
            $template->display(array_merge($context, array("name" => "first", "text" => "«", "page" => ((array_key_exists("first", $context)) ? ((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) : (null)), "clickable" => (array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")))))));
            // line 12
            echo "
            ";
            // line 13
            $template = $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
            $template->display(array_merge($context, array("name" => "prev", "text" => ("‹ " . $this->env->getExtension('translator')->trans("Previous", array(), "pagination")), "page" => ((array_key_exists("previous", $context)) ? ((isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))) : (null)), "clickable" => array_key_exists("previous", $context))));
            // line 19
            echo "
            ";
            // line 20
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 21
                echo "                ";
                $template = $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
                $template->display($context);
                // line 22
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
            ";
            // line 25
            $template = $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
            $template->display(array_merge($context, array("name" => "next", "text" => ($this->env->getExtension('translator')->trans("Next", array(), "pagination") . " ›"), "page" => ((array_key_exists("next", $context)) ? ((isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))) : (null)), "clickable" => array_key_exists("next", $context))));
            // line 32
            echo "
            ";
            // line 34
            $template = $this->env->resolveTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")));
            $template->display(array_merge($context, array("name" => "last", "text" => "»", "page" => ((array_key_exists("last", $context)) ? ((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))) : (null)), "clickable" => (array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")))))));
            // line 41
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  1414 => 421,  1408 => 419,  1402 => 417,  1394 => 414,  1385 => 413,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1256 => 369,  1251 => 368,  1249 => 367,  1237 => 360,  1231 => 358,  1228 => 357,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  876 => 218,  860 => 211,  857 => 210,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  825 => 196,  817 => 192,  814 => 191,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  694 => 138,  689 => 137,  683 => 135,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  515 => 85,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  459 => 69,  456 => 68,  442 => 62,  433 => 60,  426 => 58,  414 => 52,  408 => 50,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  371 => 35,  366 => 33,  350 => 26,  344 => 24,  342 => 23,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  293 => 6,  290 => 5,  288 => 4,  281 => 411,  271 => 374,  266 => 366,  263 => 365,  255 => 353,  253 => 342,  250 => 341,  233 => 304,  225 => 298,  222 => 297,  215 => 280,  212 => 279,  210 => 270,  197 => 249,  191 => 246,  161 => 202,  146 => 181,  134 => 161,  129 => 148,  126 => 147,  124 => 132,  104 => 90,  84 => 41,  81 => 40,  76 => 31,  1407 => 493,  1403 => 491,  1400 => 416,  1398 => 415,  1396 => 488,  1393 => 487,  1383 => 412,  1380 => 411,  1363 => 477,  1360 => 476,  1357 => 475,  1354 => 474,  1348 => 472,  1345 => 471,  1342 => 470,  1336 => 395,  1330 => 466,  1327 => 465,  1324 => 463,  1308 => 461,  1305 => 460,  1302 => 459,  1299 => 458,  1296 => 457,  1293 => 456,  1290 => 455,  1287 => 379,  1284 => 453,  1281 => 452,  1278 => 451,  1275 => 450,  1272 => 449,  1270 => 448,  1268 => 374,  1265 => 446,  1258 => 439,  1252 => 437,  1246 => 366,  1244 => 434,  1242 => 433,  1239 => 432,  1230 => 422,  1223 => 356,  1220 => 416,  1216 => 415,  1210 => 413,  1207 => 412,  1192 => 344,  1189 => 409,  1185 => 408,  1182 => 407,  1164 => 406,  1156 => 403,  1153 => 396,  1148 => 395,  1145 => 322,  1143 => 321,  1141 => 392,  1139 => 391,  1136 => 390,  1129 => 385,  1120 => 383,  1116 => 382,  1113 => 381,  1110 => 380,  1108 => 379,  1105 => 378,  1095 => 312,  1093 => 371,  1091 => 369,  1088 => 308,  1078 => 364,  1072 => 362,  1070 => 361,  1067 => 299,  1059 => 355,  1048 => 290,  1046 => 352,  1026 => 351,  1023 => 350,  1014 => 272,  1011 => 344,  1008 => 343,  1005 => 342,  1003 => 341,  1000 => 340,  991 => 335,  988 => 334,  985 => 333,  982 => 261,  980 => 331,  977 => 330,  968 => 326,  960 => 324,  958 => 253,  956 => 322,  953 => 321,  946 => 315,  941 => 314,  939 => 243,  936 => 242,  929 => 306,  925 => 305,  919 => 303,  917 => 302,  909 => 301,  904 => 300,  901 => 299,  899 => 298,  896 => 297,  887 => 293,  884 => 292,  880 => 290,  878 => 219,  873 => 217,  865 => 213,  862 => 212,  859 => 284,  854 => 283,  852 => 282,  849 => 206,  834 => 274,  831 => 273,  828 => 197,  815 => 268,  812 => 190,  809 => 189,  802 => 263,  799 => 262,  791 => 256,  785 => 178,  782 => 253,  776 => 251,  773 => 250,  767 => 170,  764 => 169,  758 => 245,  756 => 165,  752 => 243,  748 => 242,  732 => 241,  729 => 155,  726 => 239,  723 => 238,  720 => 237,  717 => 236,  714 => 235,  711 => 234,  708 => 233,  706 => 232,  704 => 231,  701 => 230,  692 => 225,  690 => 224,  685 => 223,  682 => 222,  679 => 221,  676 => 220,  674 => 219,  671 => 218,  663 => 212,  660 => 211,  658 => 124,  655 => 209,  647 => 205,  644 => 204,  642 => 203,  639 => 202,  630 => 196,  626 => 195,  622 => 194,  618 => 193,  613 => 192,  610 => 191,  604 => 189,  601 => 188,  599 => 187,  596 => 106,  588 => 181,  585 => 180,  575 => 179,  570 => 178,  567 => 177,  561 => 175,  558 => 174,  556 => 173,  553 => 172,  545 => 167,  542 => 166,  540 => 165,  539 => 164,  538 => 163,  537 => 162,  534 => 161,  531 => 160,  528 => 159,  525 => 158,  518 => 155,  508 => 148,  502 => 145,  498 => 144,  494 => 142,  488 => 140,  486 => 139,  477 => 138,  468 => 135,  466 => 134,  455 => 133,  452 => 132,  450 => 64,  448 => 130,  445 => 129,  434 => 122,  431 => 121,  428 => 59,  422 => 118,  420 => 117,  415 => 116,  412 => 115,  410 => 114,  395 => 113,  385 => 41,  377 => 37,  369 => 102,  363 => 32,  361 => 99,  352 => 96,  349 => 95,  343 => 93,  336 => 91,  333 => 90,  330 => 89,  320 => 87,  318 => 86,  310 => 85,  304 => 83,  301 => 82,  295 => 80,  289 => 76,  280 => 73,  276 => 395,  260 => 363,  256 => 70,  251 => 69,  248 => 336,  245 => 335,  242 => 66,  237 => 64,  218 => 54,  213 => 53,  211 => 52,  207 => 269,  202 => 266,  194 => 248,  186 => 239,  184 => 233,  181 => 232,  174 => 217,  165 => 36,  150 => 34,  114 => 111,  77 => 23,  34 => 14,  58 => 21,  70 => 13,  480 => 75,  474 => 137,  469 => 158,  461 => 70,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 111,  384 => 121,  381 => 108,  379 => 107,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 92,  337 => 22,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 81,  294 => 90,  285 => 3,  283 => 88,  278 => 410,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 78,  241 => 77,  229 => 60,  220 => 290,  214 => 69,  177 => 65,  169 => 210,  140 => 55,  132 => 28,  128 => 49,  107 => 36,  61 => 4,  273 => 394,  269 => 94,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 58,  221 => 77,  219 => 76,  217 => 289,  208 => 68,  204 => 267,  179 => 224,  159 => 196,  143 => 56,  135 => 53,  119 => 117,  102 => 32,  71 => 10,  67 => 7,  63 => 22,  59 => 21,  28 => 2,  93 => 28,  88 => 15,  78 => 21,  87 => 25,  46 => 7,  44 => 7,  31 => 12,  38 => 5,  26 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 216,  166 => 209,  163 => 35,  158 => 67,  156 => 195,  151 => 188,  142 => 59,  138 => 30,  136 => 168,  121 => 131,  117 => 23,  105 => 40,  91 => 56,  62 => 23,  49 => 8,  21 => 2,  25 => 3,  94 => 57,  89 => 41,  85 => 14,  75 => 17,  68 => 14,  56 => 2,  27 => 5,  24 => 3,  19 => 1,  79 => 32,  72 => 16,  69 => 13,  47 => 7,  40 => 15,  37 => 10,  22 => 1,  246 => 90,  157 => 56,  145 => 46,  139 => 169,  131 => 160,  123 => 47,  120 => 40,  115 => 43,  111 => 110,  108 => 36,  101 => 89,  98 => 31,  96 => 67,  83 => 32,  74 => 20,  66 => 7,  55 => 11,  52 => 21,  50 => 19,  43 => 5,  41 => 4,  35 => 6,  32 => 5,  29 => 4,  209 => 82,  203 => 78,  199 => 265,  193 => 73,  189 => 240,  187 => 84,  182 => 66,  176 => 223,  173 => 65,  168 => 37,  164 => 203,  162 => 57,  154 => 189,  149 => 182,  147 => 33,  144 => 176,  141 => 175,  133 => 55,  130 => 27,  125 => 26,  122 => 25,  116 => 116,  112 => 42,  109 => 105,  106 => 104,  103 => 32,  99 => 68,  95 => 16,  92 => 21,  86 => 34,  82 => 13,  80 => 25,  73 => 14,  64 => 3,  60 => 22,  57 => 15,  54 => 10,  51 => 18,  48 => 9,  45 => 8,  42 => 20,  39 => 19,  36 => 13,  33 => 12,  30 => 6,);
    }
}
