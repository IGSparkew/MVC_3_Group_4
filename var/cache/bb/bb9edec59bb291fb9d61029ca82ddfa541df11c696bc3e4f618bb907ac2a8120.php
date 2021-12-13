<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index/register.html.twig */
class __TwigTemplate_05a95ed4fd3852679c7230c88b7c43d4b8c8a09819620c033d3ccfe309b10104 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Register</title>
</head>
<body>
    <form action=\"newUser\" method=\"POST\">
        <div class=\"container\">
          <h1>Register</h1>
          <p>Please fill in this form to create an account.</p>
          <hr>
          <label for=\"username\"><strong>Username</strong></label>
          <input type=\"text\" placeholder=\"Enter Username\" name=\"username\" id=\"username\" required/>

          <label for=\"Name\"><strong>Name:</strong></label>
          <input type=\"text\" placeholder=\"Enter your Name\" name=\"name\" id=\"name\" required/>
          
          <label for=\"email\"><strong>Email</strong></label>
          <input type=\"ùail\" placeholder=\"Enter Email\" name=\"email\" id=\"email\" required/>
      
          <label for=\"psw\"><strong>Password</strong></label>
          <input type=\"password\" placeholder=\"Enter Password\" name=\"psw\" id=\"psw\" required/>
      
          <label for=\"psw-repeat\"><strong>Repeat Password</strong></label>
          <input type=\"password\" placeholder=\"Repeat Password\" name=\"psw-repeat\" id=\"psw-repeat\" required/>
          <hr>
      
          <p>By creating an account you agree to our <a href=\"#\">Terms & Privacy</a>.</p>
          <button type=\"submit\" class=\"registerbtn\">Register</button>
        </div>
      
        <div class=\"container signin\">
          <p>Already have an account? <a href=\"#\">Sign in</a>.</p>
        </div>
      </form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/register.html.twig", "D:\\ESGI\\Php 7 MVC\\php_b3_su_mvc_2021\\templates\\index\\register.html.twig");
    }
}
