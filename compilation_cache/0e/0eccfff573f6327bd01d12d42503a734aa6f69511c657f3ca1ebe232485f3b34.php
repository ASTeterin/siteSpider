<?php

/* copies.html */
class __TwigTemplate_8346c823f7713082c9cc4a5bd9cc06cd4dd67ef3ef2efe715484ee397747774a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html", "copies.html", 1);
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
    <form action=\"../search.php\" method=\"POST\">
      <div class=\"row\">
      <div class=\"form-group col-md-10\">
        <label for=\"find_text\">Введите текст для поиска</label>
        <input type=\"text\" name=\"find_text\" class=\"form-control\" id=\"find_text\" placeholder=\"Введите текст\">
      </div>
      <div class=\"form-group col-md-2\">
        <button type=\"submit\" id=\"find_button\" class=\"btn btn-primary find_button\">Найти</button>
      </div>
      </div>
      <div class=\"row\">
        <div class=\"form-group col-md-4\">
          <label for=\"site\">Сайт</label>
          <select class=\"form-control\" id=\"site\" name=\"site\">
            <option value=\"ispringsolutions\">ispringsolutions.com</option>
            <option value=\"ispring\">ispring.ru</option>
          </select>
        </div>
        <div class=\"form-group col-md-4\">
          <label for=\"begin_date\">Начальная дата</label>
          <input type=\"date\" class=\"form-control\" id=\"begin_date\" name=\"begin_date\" value=";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["beginDate"]) ? $context["beginDate"] : null), "html", null, true);
        echo " required>
        </div>
        <div class=\"form-group col-md-4\">
          <label for=\"end_date\">Конечная дата</label>
          <input type=\"date\" class=\"form-control\" id=\"end_date\" name=\"end_date\" value=";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : null), "html", null, true);
        echo " required>
        </div>
      </div>
    
    </form>
      
        
  </div>
                          
<div class=\"container all_copies\" id=\"all_copies_table\">
  <table>
  <div id=\"site_copies_table\">
      ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["siteCopies"]) ? $context["siteCopies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["site_copy"]) {
            // line 84
            echo "      <tr>
        <td> ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_copy"], "date", array()), "html", null, true);
            echo " </td>  
        <td> ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_copy"], "title", array()), "html", null, true);
            echo " </td>
        <td><a class=\"edit_icon\" href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_copy"], "url", array()), "html", null, true);
            echo "\"></a></td>
        <td><a class=\"view_icon\" href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["site_copy"], "url", array()), "html", null, true);
            echo "\"></a></td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site_copy'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "  </div>
  </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "copies.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 91,  142 => 88,  138 => 87,  134 => 86,  130 => 85,  127 => 84,  123 => 83,  108 => 71,  101 => 67,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "copies.html", "C:\\site\\Templates\\copies.html");
    }
}
