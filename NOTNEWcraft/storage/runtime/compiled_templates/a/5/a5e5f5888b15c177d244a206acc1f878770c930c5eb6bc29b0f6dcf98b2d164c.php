<?php

/* _includes/forms */
class __TwigTemplate_a5e5f5888b15c177d244a206acc1f878770c930c5eb6bc29b0f6dcf98b2d164c extends Craft\BaseTemplate
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
        // line 4
        echo "

";
        // line 7
        echo "

";
        // line 12
        echo "

";
        // line 17
        echo "

";
        // line 22
        echo "

";
        // line 27
        echo "

";
        // line 32
        echo "

";
        // line 37
        echo "

";
        // line 42
        echo "

";
        // line 47
        echo "

";
        // line 52
        echo "

";
        // line 57
        echo "

";
        // line 62
        echo "

";
        // line 67
        echo "

";
        // line 72
        echo "

";
        // line 77
        echo "

";
        // line 82
        echo "

";
        // line 87
        echo "

";
        // line 92
        echo "

";
        // line 97
        echo "

";
        // line 100
        echo "

";
        // line 105
        echo "

";
        // line 110
        echo "

";
        // line 115
        echo "

";
        // line 120
        echo "

";
        // line 125
        echo "

";
        // line 130
        echo "

";
        // line 135
        echo "

";
        // line 140
        echo "

";
        // line 145
        echo "

";
        // line 150
        echo "

";
        // line 161
        echo "

";
        // line 166
        echo "

";
        // line 171
        echo "

";
        // line 176
        echo "

";
        // line 181
        echo "

";
        // line 187
        echo "

";
        // line 192
        echo "

";
        // line 195
        echo "

";
    }

    // line 1
    public function geterrorList($__errors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "errors" => $__errors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $this->loadTemplate("_includes/forms/errorList", "_includes/forms", 2)->display($context);
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function gethidden($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 10
            $this->loadTemplate("_includes/forms/hidden", "_includes/forms", 10)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function gettext($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "\t";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 15)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getpassword($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "\t";
            $this->loadTemplate("_includes/forms/text", "_includes/forms", 20)->display(twig_array_merge((isset($context["config"]) ? $context["config"] : null), array("type" => "password")));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getdate($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            $this->loadTemplate("_includes/forms/date", "_includes/forms", 25)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function gettime($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 30
            echo "\t";
            $this->loadTemplate("_includes/forms/time", "_includes/forms", 30)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 34
    public function getcolor($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 35
            echo "\t";
            $this->loadTemplate("_includes/forms/color", "_includes/forms", 35)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function gettextarea($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 40
            echo "\t";
            $this->loadTemplate("_includes/forms/textarea", "_includes/forms", 40)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getselect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 45
            echo "\t";
            $this->loadTemplate("_includes/forms/select", "_includes/forms", 45)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 49
    public function getmultiselect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 50
            echo "\t";
            $this->loadTemplate("_includes/forms/multiselect", "_includes/forms", 50)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 54
    public function getcheckbox($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 55
            echo "\t";
            $this->loadTemplate("_includes/forms/checkbox", "_includes/forms", 55)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getcheckboxGroup($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "\t";
            $this->loadTemplate("_includes/forms/checkboxGroup", "_includes/forms", 60)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 64
    public function getcheckboxSelect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 65
            echo "\t";
            $this->loadTemplate("_includes/forms/checkboxSelect", "_includes/forms", 65)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 69
    public function getradio($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 70
            echo "\t";
            $this->loadTemplate("_includes/forms/radio", "_includes/forms", 70)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getradioGroup($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 75
            echo "\t";
            $this->loadTemplate("_includes/forms/radioGroup", "_includes/forms", 75)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 79
    public function getfile($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 80
            echo "\t";
            $this->loadTemplate("_includes/forms/file", "_includes/forms", 80)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 84
    public function getlightswitch($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 85
            echo "\t";
            $this->loadTemplate("_includes/forms/lightswitch", "_includes/forms", 85)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 89
    public function geteditableTable($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 90
            echo "\t";
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 90)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 94
    public function getelementSelect($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 95
            echo "\t";
            $this->loadTemplate("_includes/forms/elementSelect", "_includes/forms", 95)->display((isset($context["config"]) ? $context["config"] : null));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 102
    public function getfield($__config__ = null, $__input__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "input" => $__input__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 103
            echo "\t";
            $this->loadTemplate("_includes/forms/field", "_includes/forms", 103)->display(twig_array_merge((isset($context["config"]) ? $context["config"] : null), array("input" => (isset($context["input"]) ? $context["input"] : null))));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 107
    public function gettextField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 108
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "text", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 112
    public function getpasswordField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 113
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "password", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 117
    public function getdateField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 118
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "date", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 122
    public function gettimeField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 123
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "time", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 127
    public function getcolorField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 128
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "color", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 132
    public function getdateTimeField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 133
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => ($this->getAttribute($this, "date", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method") . $this->getAttribute($this, "time", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method"))), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 137
    public function gettextareaField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 138
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "textarea", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 142
    public function getselectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 143
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "select", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 147
    public function getmultiselectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 148
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "multiselect", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 152
    public function getcheckboxField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 153
            echo "\t";
            $context["instructions"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "instructions", array(), "any", true, true)) ? ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "instructions", array())) : (""));
            // line 154
            echo "<div class=\"field checkboxfield";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "first", array(), "any", true, true) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "first", array()))) {
                echo " first";
            }
            if ((isset($context["instructions"]) ? $context["instructions"] : null)) {
                echo " has-instructions";
            }
            echo "\"";
            if (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id", array(), "any", true, true) && $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id", array()))) {
                echo " id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "id", array()), "html", null, true);
                echo "-field\"";
            }
            echo ">
\t\t";
            // line 155
            echo $this->getAttribute($this, "checkbox", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method");
            echo "
\t\t";
            // line 156
            if ((isset($context["instructions"]) ? $context["instructions"] : null)) {
                // line 157
                echo "\t\t\t<div class=\"instructions\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('craft')->markdownFilter((isset($context["instructions"]) ? $context["instructions"] : null)), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 159
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 163
    public function getcheckboxSelectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 164
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "checkboxSelect", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 168
    public function getradioGroupField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 169
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "radioGroup", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 173
    public function getfileField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 174
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "file", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 178
    public function getlightswitchField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 179
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "lightswitch", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 183
    public function geteditableTableField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 184
            echo "\t";
            ob_start();
            $this->loadTemplate("_includes/forms/editableTable", "_includes/forms", 184)->display((isset($context["config"]) ? $context["config"] : null));
            $context["input"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 185
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => (isset($context["input"]) ? $context["input"] : null)), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 189
    public function getelementSelectField($__config__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 190
            echo "\t";
            echo $this->getAttribute($this, "field", array(0 => (isset($context["config"]) ? $context["config"] : null), 1 => $this->getAttribute($this, "elementSelect", array(0 => (isset($context["config"]) ? $context["config"] : null)), "method")), "method");
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 197
    public function getoptionShortcutLabel($__key__ = null, $__shift__ = null, $__alt__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "key" => $__key__,
            "shift" => $__shift__,
            "alt" => $__alt__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 198
            ob_start();
            // line 199
            echo "\t\t";
            switch ($this->getAttribute($this->getAttribute((isset($context["craft"]) ? $context["craft"] : null), "request", array()), "getClientOs", array(), "method")) {
                case "Mac":
                {
                    // line 201
                    echo "\t\t\t\t<span class=\"shortcut\">";
                    echo ((((((isset($context["alt"]) ? $context["alt"] : null)) ? ("⌥") : ("")) . (((isset($context["shift"]) ? $context["shift"] : null)) ? ("⇧") : (""))) . "⌘") . (isset($context["key"]) ? $context["key"] : null));
                    echo "</span>
\t\t\t";
                    break;
                }
                default:
                {
                    // line 203
                    echo "\t\t\t\t<span class=\"shortcut\">";
                    echo twig_escape_filter($this->env, ((("Ctrl+" . (((isset($context["alt"]) ? $context["alt"] : null)) ? ("Alt+") : (""))) . (((isset($context["shift"]) ? $context["shift"] : null)) ? ("Shift+") : (""))) . (isset($context["key"]) ? $context["key"] : null)), "html", null, true);
                    echo "</span>
\t\t";
                }
            }
            // line 205
            echo "\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "_includes/forms";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1144 => 205,  1137 => 203,  1128 => 201,  1123 => 199,  1121 => 198,  1107 => 197,  1093 => 190,  1081 => 189,  1067 => 185,  1062 => 184,  1050 => 183,  1036 => 179,  1024 => 178,  1010 => 174,  998 => 173,  984 => 169,  972 => 168,  958 => 164,  946 => 163,  934 => 159,  928 => 157,  926 => 156,  922 => 155,  906 => 154,  903 => 153,  891 => 152,  877 => 148,  865 => 147,  851 => 143,  839 => 142,  825 => 138,  813 => 137,  799 => 133,  787 => 132,  773 => 128,  761 => 127,  747 => 123,  735 => 122,  721 => 118,  709 => 117,  695 => 113,  683 => 112,  669 => 108,  657 => 107,  645 => 103,  632 => 102,  620 => 95,  608 => 94,  596 => 90,  584 => 89,  572 => 85,  560 => 84,  548 => 80,  536 => 79,  524 => 75,  512 => 74,  500 => 70,  488 => 69,  476 => 65,  464 => 64,  452 => 60,  440 => 59,  428 => 55,  416 => 54,  404 => 50,  392 => 49,  380 => 45,  368 => 44,  356 => 40,  344 => 39,  332 => 35,  320 => 34,  308 => 30,  296 => 29,  284 => 25,  272 => 24,  260 => 20,  248 => 19,  236 => 15,  224 => 14,  213 => 10,  201 => 9,  189 => 2,  177 => 1,  171 => 195,  167 => 192,  163 => 187,  159 => 181,  155 => 176,  151 => 171,  147 => 166,  143 => 161,  139 => 150,  135 => 145,  131 => 140,  127 => 135,  123 => 130,  119 => 125,  115 => 120,  111 => 115,  107 => 110,  103 => 105,  99 => 100,  95 => 97,  91 => 92,  87 => 87,  83 => 82,  79 => 77,  75 => 72,  71 => 67,  67 => 62,  63 => 57,  59 => 52,  55 => 47,  51 => 42,  47 => 37,  43 => 32,  39 => 27,  35 => 22,  31 => 17,  27 => 12,  23 => 7,  19 => 4,);
    }
}
