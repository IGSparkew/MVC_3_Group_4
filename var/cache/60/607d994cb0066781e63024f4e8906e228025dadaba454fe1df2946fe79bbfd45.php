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

/* index/login.html.twig */
class __TwigTemplate_0b793fd83cb3bb2818faa5f48928134b30d01981001d1c21b0b503618483080f extends Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Se connecter</title>
    <style>
      @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
    
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Montserrat', sans-serif;
    }
    body{
      background: #fec107;
      padding: 0 10px;
    }
    .wrapper{
      max-width: 500px;
      width: 100%;
      background: #fff;
      margin: 50px auto;
      box-shadow: 2px 2px 4px rgba(0,0,0,0.125);
      padding: 30px;
    }
    
    .wrapper .title{
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 25px;
      color: #fec107;
      text-transform: uppercase;
      text-align: center;
    }
    
    .wrapper .form{
      width: 100%;
    }
    
    .wrapper .form .inputfield{
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }
    
    .wrapper .form .inputfield label{
       width: 200px;
       color: #757575;
       margin-right: 10px;
      font-size: 14px;
    }
    
    .wrapper .form .inputfield .input,
    .wrapper .form .inputfield .textarea{
      width: 100%;
      outline: none;
      border: 1px solid #d5dbd9;
      font-size: 15px;
      padding: 8px 10px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    
    .wrapper .form .inputfield .textarea{
      width: 100%;
      height: 125px;
      resize: none;
    }
    
    .wrapper .form .inputfield .custom_select{
      position: relative;
      width: 100%;
      height: 37px;
    }
    
    .wrapper .form .inputfield .custom_select:before{
      content: \"\";
      position: absolute;
      top: 12px;
      right: 10px;
      border: 8px solid;
      border-color: #d5dbd9 transparent transparent transparent;
      pointer-events: none;
    }
    
    .wrapper .form .inputfield .custom_select select{
      -webkit-appearance: none;
      -moz-appearance:   none;
      appearance:        none;
      outline: none;
      width: 100%;
      height: 100%;
      border: 0px;
      padding: 8px 10px;
      font-size: 15px;
      border: 1px solid #d5dbd9;
      border-radius: 3px;
    }
    
    
    .wrapper .form .inputfield .input:focus,
    .wrapper .form .inputfield .textarea:focus,
    .wrapper .form .inputfield .custom_select select:focus{
      border: 1px solid #fec107;
    }
    
    .wrapper .form .inputfield p{
       font-size: 14px;
       color: #757575;
    }
    .wrapper .form .inputfield .check{
      width: 15px;
      height: 15px;
      position: relative;
      display: block;
      cursor: pointer;
    }
    .wrapper .form .inputfield .check input[type=\"checkbox\"]{
      position: absolute;
      top: 0;
      left: 0;
      opacity: 0;
    }
    .wrapper .form .inputfield .check .checkmark{
      width: 15px;
      height: 15px;
      border: 1px solid #fec107;
      display: block;
      position: relative;
    }
    .wrapper .form .inputfield .check .checkmark:before{
      content: \"\";
      position: absolute;
      top: 1px;
      left: 2px;
      width: 5px;
      height: 2px;
      border: 2px solid;
      border-color: transparent transparent #fff #fff;
      transform: rotate(-45deg);
      display: none;
    }
    .wrapper .form .inputfield .check input[type=\"checkbox\"]:checked ~ .checkmark{
      background: #fec107;
    }
    
    .wrapper .form .inputfield .check input[type=\"checkbox\"]:checked ~ .checkmark:before{
      display: block;
    }
    
    .wrapper .form .inputfield .btn{
      width: 100%;
       padding: 8px 10px;
      font-size: 15px; 
      border: 0px;
      background:  #fec107;
      color: #fff;
      cursor: pointer;
      border-radius: 3px;
      outline: none;
    }
    
    .wrapper .form .inputfield .btn:hover{
      background: #ffd658;
    }
    
    .wrapper .form .inputfield:last-child{
      margin-bottom: 0;
    }
    
    @media (max-width:420px) {
      .wrapper .form .inputfield{
        flex-direction: column;
        align-items: flex-start;
      }
      .wrapper .form .inputfield label{
        margin-bottom: 5px;
      }
      .wrapper .form .inputfield.terms{
        flex-direction: row;
      }
    }
    
    </style>
  </head>

<body>
    <div class=\"wrapper\">
        <div class=\"title\">
          Se connecter
        </div>
           <div class=\"inputfield\">
            <label>Email</label>
            <input type=\"text\" class=\"input\">
         </div> 
           <div class=\"inputfield\">
              <label>Mot de passe</label>
              <input type=\"password\" class=\"input\">
           </div>  

          <div class=\"inputfield terms\">
              <label class=\"check\">
              </label>
           </div> 
          <div class=\"inputfield\">
            <input type=\"submit\" value=\"Se connecter\" class=\"btn\">
          </div>
        </div>
    </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index/login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index/login.html.twig", "D:\\ESGI\\Php 7 MVC\\MVC_3_Group_4\\templates\\index\\login.html.twig");
    }
}
