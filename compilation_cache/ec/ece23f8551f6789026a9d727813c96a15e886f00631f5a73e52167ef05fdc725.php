<?php

/* books.html */
class __TwigTemplate_39ffedecebcdd1bba10278e713456bfe4e00b2e18c71d6ef51363d4deb20e39d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "books.html", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Site Spider";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"header\">
    <div class=\"container-fluid\">
      <div class=\"row align-items-center\">
        <div class=\"col-1\">
        </div>
        <div class=\"col\">
          <h3 class=\"product_name\">Site Spider</h1>
        </div>
        <div class=\"col-2\">
          <button type=\"button\" class=\"btn btn-primary add_site_button\" data-toggle=\"modal\" data-target=\"#addToArchiveModal\">Добавить сайт в архив</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"modal fade bd-example-modal-lg\" id=\"addToArchiveModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addToArchiveModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\" role=\"document\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <h5 class=\"modal-title\" id=\"addToArchiveModalLabel\">Modal title</h5>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <form>
          
            <div class=\"form-group\">
              <label for=\"changes_description_area\">Описание релиза</label>
              <textarea class=\"form-control changes_description_text\" id=\"changes-description-area\" rows=\"3\"></textarea>
            </div>        
          </form>
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-primary\">Сохранить</button>
        </div>
      </div>
    </div>
  </div>

  <div class=\"container\">
    <form>
      <div class=\"row\">
      <div class=\"form-group col-md-10\">
        <label for=\"find_text\">Введите текст для поиска</label>
        <input type=\"text\" class=\"form-control\" id=\"find_text\" placeholder=\"Введите текст\">
      </div>
      <div class=\"form-group col-md-2\">
        <button type=\"button\" class=\"btn btn-primary find_button\">Найти</button>
      </div>
      </div>
      <div class=\"row\">
        <div class=\"form-group col-md-4\">
          <label for=\"site\">Сайт</label>
          <select class=\"form-control\" id=\"site\">
            <option value=\"ispringsolutions\">ispringsolutions.com</option>
            <option value=\"ispring\">ispring.ru</option>
          </select>
        </div>
        <div class=\"form-group col-md-4\">
          <label for=\"begin_date\">Начальная дата</label>
          <input type=\"date\" class=\"form-control\" id=\"begin_date\" name=\"date\" placeholder=\"Дата\" required>
        </div>
        <div class=\"form-group col-md-4\">
          <label for=\"end_date\">Конечная дата</label>
          <input type=\"date\" class=\"form-control\" id=\"end_date\" name=\"date\" placeholder=\"Дата\" required>
        </div>
      </div>
    
    </form>
      
        
  </div>
                          
<div class=\"container\">
  <table>
  <div id=\"books\">
      ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["books"]) ? $context["books"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 84
            echo "      <tr>
        <td> ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "date", array()), "html", null, true);
            echo " </td>  
        <td> ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "title", array()), "html", null, true);
            echo " </td>
        <td><a class=\"edit_icon\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "url", array()), "html", null, true);
            echo "\"></a></td>
        <td><a class=\"view_icon\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "url", array()), "html", null, true);
            echo "\"></a></td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "  </div>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "books.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 91,  136 => 88,  132 => 87,  128 => 86,  124 => 85,  121 => 84,  117 => 83,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "books.html", "C:\\site\\Templates\\books.html");
    }
}
