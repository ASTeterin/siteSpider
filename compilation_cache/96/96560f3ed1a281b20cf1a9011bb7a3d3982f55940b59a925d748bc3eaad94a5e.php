<?php

/* base.html */
class __TwigTemplate_5b84675b214e1072c076c0ae2d875b9b61c9aba5e3d36dcd0c057c2ec3feb5c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->  
    <link href=\"../css/bootstrap.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"../css/main.css\">
  </head>
  
  <body>
    
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 19
        echo "        
    <!-- на jQuery (необходим для Bootstrap - х JavaScript плагины) -->  
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
    <!-- Включают все скомпилированные плагины (ниже), или включать отдельные файлы по мере необходимости -->  
    <script src=\"../js/bootstrap.min.js\"></script>
    <script src=\"../js/main.js\"></script>
    <script src=\"../js/moment.js\"></script>
    
  </body>
</html>";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  53 => 17,  40 => 19,  38 => 17,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html", "C:\\site\\Templates\\base.html");
    }
}
